<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BackupcodesModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;



class Login extends BaseController
{

    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $data = [
            'title'     => 'Login Page',
        ];

        $view = \Config\Services::renderer();

        //$view->setVar('data', $data);

        return view('login/index', $data);


        //return  $view->render('login/index', $data);

        //return $this->_render($this->config->views['login'], ['config' => $this->config]);

        //        return view('templates/header', $data)
        //            . view('login/index')
        //            . view('templates/footer');
    }

    public function register()
    {
        $data = [
            'title'     => 'Register Page',
        ];
        return view('login/register', $data);
    }

    public function store()
    {

        $validated = $this->validate(
            [
                'username' => 'required|is_unique[users.username]',
                'password' => 'required|PasswordIsValid',
                'password_confirm' => 'required|matches[password]',
                'password_sign' => 'required|min_length[6]',
                'password_sign_confirm' => 'required|matches[password_sign]'
            ],
            [
                'username' => [
                    'required' => 'Nome de usuário é requerido',
                    'is_unique' => 'Nome de usuário já existe'
                ],
                'password' => [
                    'required' => 'Password é requerido'
                ],
                'password_confirm' => [
                    'required' => 'Confirmação de password é requerido',
                    'matches' => 'Confirmação de password não confere'
                ],
                'password_sign' => [
                    'required' => 'Senha de assinatura é requerido',
                    'min_length' => 'Senha de assinatura deve ter no mínimo 6 caracteres'
                ],
                'password_sign_confirm' => [
                    'required' => 'Confirmação de senha de assinatura é requerido',
                    'matches' => 'Confirmação de senha de assinatura não confere',
                ],
            ]
        );



        if (!$validated) {
            //return redirect()->back()->withInput();
            return redirect()->route('login/register')->with('errors', $this->validator->getErrors())->withInput();
        }

        $user = new UserModel();
        $user->insert([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);

        session()->set('userId', $user->getInsertID());

        //dd($user);

        return redirect()->route('login/registerotp');
    }

    public function registerOtp()
    {
        $data = [
            'title'     => 'Register Page',
        ];

        if (!session()->has('userId')) {

            return redirect()->route('login/register')->with('error', 'Ocorreu um erro ao criar o usuário');
        }

        // $sql = "SELECT otp_secret FROM users WHERE id = :id";

        //$sql = "SELECT backup_code FROM backupcodes WHERE cod_user = :id AND used = 0";
        //$backupCodes = new BackupcodesModel();
        //$userFound = $backupCodes->where('cod_user', $this->request->getPost('username'))->first();

        $db      = \Config\Database::connect();
        $builder = $db->table('backupcodes');
        $builder->select('backup_code');
        $builder->where('cod_user', session()->get('userId'));
        $builder->where('used', 0);
        $query = $builder->get();

        dd($query->getNumRows());

        $array = ['cod_user' => session()->get('userId'), 'used' => 0];


        return view('login/registerotp', $data);
    }



    public function auth()
    {

        $validated = $this->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username' => [
                    'required' => 'Nome de usuário é requerido'
                ],
                'password' => [
                    'required' => 'Password é requerido'
                ]
            ]
        );

        if (!$validated) {

            return redirect()->route('login')->with('errors', $this->validator->getErrors())->withInput();
            //return redirect()->back()->withInput();
        }

        //dd($this->request->getPost());

        //$user = new \App\Models\UserModel();
        $user = new UserModel();
        $userFound = $user->where('username', $this->request->getPost('username'))->first();

        if (!$userFound) {
            return redirect()->route('login')->with('message', 'Usuário ou senha inválidos')->withInput();
        }

        if (!password_verify($this->request->getPost('password'), $userFound->password)) {
            return redirect()->route('login')->with('message', 'Usuário ou senha inválidos')->withInput();
        }

        unset($userFound->password);
        session()->set('user', $userFound);

        //dd($userFound);

        $info = [
            'id'         => $userFound->id,
            'username'   => $userFound->username,
            'ip_address' => $this->request->getIPAddress(),
        ];

        log_message('info', 'Login: User {id} - {username} logged into the system from {ip_address}', $info);

        return redirect()->route('news');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->route('login');
    }
}
