<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Auth;
use App\Libraries\Cipher;
use App\Models\PostsModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\I18n\Time;
use phpseclib3\Crypt\RSA;

class Posts extends BaseController
{

    private $ttl = 60;

    protected $helpers = ['date', 'form'];

    public function __construct()
    {
        //https://clouddevs.com/codeigniter/work-with-dates-and-times/
        $this->ttl = (int) env('cache.ttl', 60); // 1 minute

    }

    public function index()
    {

        $data = [
            'title' => 'Posts list',
        ];

        $postsCached = cache()->remember('posts', $this->ttl, function () {
            $postsModel = model('PostsModel')
                ->select('posts.*, users.username')
                ->join('users', 'users.id = posts.user_id')
                ->asArray()
                ->findAll();
            return $postsModel; //->asArray()->findAll();
        });

        $data['posts'] = $postsCached;

        return view('posts/index', $data);
    }

    public function new()
    {
        $data = [
            'title' => 'New Post',
        ];

        return view('posts/new', $data);
        //
    }

    public function create()
    {

        $data = $this->request->getPost(['title', 'contend', 'status', 'password_sign']);

        $validated = $this->validateData(
            $data,
            [
                'title'         => 'required|max_length[200]|min_length[3]',
                'contend'       => 'required|max_length[10000]|min_length[10]',
                'status'        => 'required|in_list[draft,pending,publish]',
                'password_sign' => 'required',
            ],
            [
                'title'           => [
                    'required'    => '{field} is required',
                    'max_length'  => '{field} cannot exceed {param} characters',
                    'min_length'  => '{field} must be at least {param} characters long',
                ],
                'contend'         => [
                    'required'    => '{field} is required',
                    'max_length'  => '{field} cannot exceed {param} characters',
                    'min_length'  => '{field} must be at least {param} characters long',
                ],
                'status'         => [
                    'required'    => '{field} is required',
                    'max_length'  => '{field} must be draft, pending or publish',
                ],
                'password_sign' => [
                    'required'    => '{field} is required',
                ],
            ]
        );

        // Checks whether the submitted data passed the validation rules.
        if (!$validated) {
            return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
        }


        $deciphed_private_key = '';
        $cipher = new Cipher();

        // tentando decriptografar a chave privada
        $deciphed_private_key = $cipher->decrypt(session()->get('user')['private_key'], $data['password_sign']);

        // verificando se a chave privada foi decriptografada com sucesso
        if (empty($deciphed_private_key)) {
            // em caso de erro, retorna para a tela de cadastro
            $this->validator->setError('password_sign', 'Invalid password sign.');
            return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
        }

        // inserindo o código do usuário logado nos dados do post
        $data['user_id'] = service('auth')->getUser()['id'];

        // get resume form register data
        $resume = $data['title'] . $data['contend'] . $data['status'] . $data['user_id'];

        // loading the deciphed private key
        $private = RSA::loadPrivateKey($deciphed_private_key);

        // sign the resume
        $sing = $private->sign($resume);
        $digital_sign = base64_encode($sing);

        // inserindo a assinatura digital
        $data['digital_sign'] = $digital_sign;

        // instanciando o model
        $postsModel = new PostsModel();

        try {
            $postsModel->insert($data);
            // Clear the cache for posts
            cache()->delete('posts');
            return redirect()->to('/posts')->with('success', 'Post created successfully')->withInput();
        } catch (\Exception $e) {

            // gerando o dados para o log
            $log_data = [
                'id' => session()->get('user')['id'],
                'username' => session()->get('user')['username'],
                'ip_address' => $this->request->getIPAddress(),
                'error' => $e->getMessage(),
            ];

            // Log the error message
            log_message('error', 'ID: {id} - username: {username} - IP: {ip_address} - Failed to create post: {error}', $log_data);

            return redirect()->back()->with('error', 'Failed to create post. Try again.')->withInput();
        }
        ///
    }

    public function edit(?int $id)
    {
        $data = [
            'title' => 'Edit Post',
        ];

        if (empty($id)) {
            return redirect()->back()->with('error', 'Failed to retirve post');
        }

        try {

            // instanciando o model
            $postsModel = model('PostsModel');
            $post = $postsModel->find($id);

            if (empty($post)) {
                return redirect()->back()->with('error', 'Post not found');
            }

            // buscando o usuário criador do post
            $user = model('UserModel')
                ->select('public_key')
                ->where('id', $post['user_id'])
                ->asArray()
                ->first();


            //$user = model('UserModel')->find($post['user_id']);


            //$userModel = model('UsersModel');
            //$user = $userModel->find($post['user_id']);

            //$stored_public_key = Auth::getUser()['public_key'];
            $stored_public_key = $user['public_key'];
            $stored_signature = $post['digital_sign'];

            // get resume form register data
            $resume = $post['title'] . $post['contend'] . $post['status'] . $post['user_id'];

            $public_key = RSA::loadPublicKey($stored_public_key);

            $deciphed_signature = base64_decode($stored_signature);
            //$check_sign = $public_key->verify($resume, $deciphed_signature) ? 'valid signature' : 'invalid signature';
            $digital_sign = $public_key->verify($resume, $deciphed_signature) ? TRUE : FALSE;

            $post['digital_sign'] = $digital_sign;

            $data['post'] = $post;

            return view('posts/edit', $data);
        } catch (\Exception $e) {
            // gerando o dados para o log
            $log_data = [
                'id' => session()->get('user')['id'],
                'username' => session()->get('user')['username'],
                'ip_address' => $this->request->getIPAddress(),
                'error' => $e->getMessage(),
            ];

            // Log the error message
            log_message('error', 'ID: {id} - username: {username} - IP: {ip_address} - Failed to retrive post: {error}', $log_data);

            return redirect()->back()->with('error', 'Failed to retrive post. Try again.')->withInput();
        }
    }

    public function update()
    {
        // pegando os dados do post
        $data = $this->request->getPost(['id', 'title', 'contend', 'status', 'password_sign']);

        $validated = $this->validateData(
            $data,
            [
                'id'            => 'required|is_not_unique[posts.id]',
                'title'         => 'required|max_length[200]|min_length[3]',
                'contend'       => 'required|max_length[10000]|min_length[10]',
                'status'        => 'required|in_list[draft,pending,publish]',
                'password_sign' => 'required',
            ],
            [
                'id'            => [
                    'required'    => '{field} is required',
                    'is_not_unique'  => '{field} not found',
                ],
                'title'           => [
                    'required'    => '{field} is required',
                    'max_length'  => '{field} cannot exceed {param} characters',
                    'min_length'  => '{field} must be at least {param} characters long',
                ],
                'contend'         => [
                    'required'    => '{field} is required',
                    'max_length'  => '{field} cannot exceed {param} characters',
                    'min_length'  => '{field} must be at least {param} characters long',
                ],
                'status'         => [
                    'required'    => '{field} is required',
                    'max_length'  => '{field} must be draft, pending or publish',
                ],
                'password_sign' => [
                    'required'    => '{field} is required',
                ],
            ]
        );

        // Checks whether the submitted data passed the validation rules.
        if (!$validated) {
            return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
        }

        // tentando decriptografar a chave privada
        $cipher = new Cipher();
        $private_key = service('auth')->getUser()['private_key'];
        $deciphed_private_key = $cipher->decrypt($private_key, $data['password_sign']);

        // verificando se a chave privada foi decriptografada com sucesso
        if (empty($deciphed_private_key)) {
            // em caso de erro, retorna para a tela de cadastro
            $this->validator->setError('password_sign', 'Invalid password sign.');
            return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
        }

        // inserindo o código do usuário logado nos dados do post
        $data['user_id'] = service('auth')->getUser()['id'];

        // get resume form register data
        $resume = $data['title'] . $data['contend'] . $data['status'] . $data['user_id'];

        // loading the deciphed private key
        $private = RSA::loadPrivateKey($deciphed_private_key);

        // sign the resume
        $sing = $private->sign($resume);
        $digital_sign = base64_encode($sing);

        // inserindo a assinatura digital
        $data['digital_sign'] = $digital_sign;

        // instanciando o model
        $postsModel = new PostsModel();

        try {
            $postsModel->save($data);
            // Clear the cache for posts
            cache()->delete('posts');
            return redirect()->to('/posts')->with('success', 'Post update successfully')->withInput();
        } catch (\Exception $e) {

            // gerando o dados para o log
            $log_data = [
                'id' => session()->get('user')['id'],
                'username' => session()->get('user')['username'],
                'ip_address' => $this->request->getIPAddress(),
                'error' => $e->getMessage(),
            ];

            // Log the error message
            log_message('error', 'ID: {id} - username: {username} - IP: {ip_address} - Failed to update post: {error}', $log_data);

            return redirect()->back()->with('error', 'Failed to update post. Try again.')->withInput();
        }
    }

    public function delete()
    {

        $id = (int) $this->request->getPost('id');

        if (empty($id)) {
            return redirect()->back()->with('error', 'Failed to delete post');
        }

        try {
            $postsModel = model('PostsModel');
            $postsModel->delete($id);

            // Remove the cache
            cache()->delete('posts');

            //return redirect()->to('/posts')->with('success', 'Post deleted successfully');
            return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
        } catch (\Exception $e) {
            // gerando o dados para o log
            $log_data = [
                'id' => session()->get('user')['id'],
                'username' => session()->get('user')['username'],
                'ip_address' => $this->request->getIPAddress(),
                'error' => $e->getMessage(),
            ];

            // Log the error message
            log_message('error', 'ID: {id} - username: {username} - IP: {ip_address} - Failed to delete post: {error}', $log_data);

            return redirect()->back()->with('error', 'Failed to delete post. Try again.');
        }
    }

    //

}
