<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Posts extends BaseController
{

    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'Posts list',
        ];

        $postsModel = model('PostsModel');

        $postsCached = cache()->remember('posts', 10, function () use ($postsModel) {
            //dump('Cache created');
            return $postsModel->asArray()->findAll();
        });

        $data['posts'] = $postsCached;

        return view('posts/index', $data);
    }

    public function new()
    {
        //
    }
}
