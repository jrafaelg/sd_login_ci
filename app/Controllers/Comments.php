<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CommentsModel;
use CodeIgniter\HTTP\ResponseInterface;

class Comments extends BaseController
{

    protected $helpers = ['date', 'form'];

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        //
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new(...$params)
    {

        //dd($params);

        $data = [
            'title' => 'New comment',
            'object' => $params[0] ?? null,
            'object_id' => $params[1] ?? null,
        ];

        return view('comments/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {

        $data = $this->request->getPost(['comment', 'object', 'object_id', 'user_id', 'parent_id']);

        $validated = $this->validateData(
            $data,
            [
                'comment'       => 'required|max_length[10000]|min_length[10]',
                'object'        => 'required',
                'object_id'     => 'required|is_natural_no_zero',
            ],
            [
                'comment'           => [
                    'required'    => '{field} is required',
                    'max_length'  => '{field} cannot exceed {param} characters',
                    'min_length'  => '{field} must be at least {param} characters long',
                ],
                'object'          => [
                    'required'    => 'Error!',
                ],
                'object_id'       => [
                    'required'    => 'Error!',
                    'max_length'  => 'Error!',
                ],
            ]
        );

        // Checks whether the submitted data passed the validation rules.
        if (!$validated) {
            return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
        }

        // instanciando a classe 
        $comment = new \App\Entities\CommentsEntity($data);

        // inserindo o código do usuário logado nos dados do post
        $comment->user_id = service('auth')->getUser()['id'];

        // instanciando o model
        $commentsModel = new CommentsModel();

        try {

            $commentsModel->insert($comment);

            return redirect()->to('/posts')->with('success', 'Comment add successfully')->withInput();
            //return redirect()->back()->with('success', 'Comment add successfully')->withInput();

        } catch (\Exception $e) {

            // gerando o dados para o log
            $log_data = [
                'id' => service('auth')->getUser()['id'],
                'username' => service('auth')->getUser()['username'],
                'ip_address' => $this->request->getIPAddress(),
                'error' => $e->getMessage(),
            ];

            // Log the error message
            log_message('error', 'ID: {id} - username: {username} - IP: {ip_address} - Failed to create comment: {error}', $log_data);

            return redirect()->back()->with('error', 'Failed to create comment. Try again.')->withInput();
        }

        //
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update()
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete()
    {

        $id = (int) $this->request->getPost('id');

        if (empty($id)) {
            return redirect()->back()->with('error', 'Failed to delete comment');
        }

        try {
            $commentsModel = model('CommentsModel');
            $commentsModel->delete($id);


            return redirect()->route('posts.index')->with('success', 'Comment deleted successfully');

            //return redirect()->back()->with('success', 'Comment deleted successfully');
        } catch (\Exception $e) {
            // gerando o dados para o log
            $log_data = [
                'id' => service('auth')->getUser()['id'],
                'username' => service('auth')->getUser()['username'],
                'ip_address' => $this->request->getIPAddress(),
                'error' => $e->getMessage(),
            ];

            // Log the error message
            log_message('error', 'ID: {id} - username: {username} - IP: {ip_address} - Failed to delete comment: {error}', $log_data);

            return redirect()->back()->with('error', 'Failed to delete comment. Try again.');
        }
        //
    }
}
