<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;



class Login extends BaseController
{

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

            return redirect()->route('login')->with('errors', $this->validator->getErrors());
            //return redirect()->back()->withInput();
        }

        //$user = new \App\Models\UserModel();
        $user = new UserModel();
        $userFound = $user->where('username', $this->request->getPost('username'))->first();

        if (!$userFound) {
            return redirect()->route('login')->with('message', 'Usuário ou senha inválidos');
        }

        if (!password_verify($this->request->getPost('password'), $userFound->password)) {
            return redirect()->route('login')->with('message', 'Usuário ou senha inválidos');
        }

        unset($userFound->password);
        session()->set('user', $userFound);

        return redirect()->route('news');

        // var_dump(!password_verify($this->request->getPost('password'), $userFound->password));
        // exit;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->route('login');
    }
}
