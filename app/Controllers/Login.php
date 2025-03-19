<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Login Page',
        ];

        return  view('login/index', $data);

//        return view('templates/header', $data)
//            . view('login/index')
//            . view('templates/footer');
    }

    public function auth(){


        helper('form');

        $data = $this->request->getPost(['username', 'password']);

        var_dump($data);
        exit;


        return  view('templates/footer');
    }


}
