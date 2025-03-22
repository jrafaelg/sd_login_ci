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

        $view = \Config\Services::renderer();

        //$view->setVar('data', $data);

        return view('login/index', $data);


        //return  $view->render('login/index', $data);

        //return $this->_render($this->config->views['login'], ['config' => $this->config]);

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
