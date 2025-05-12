<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\I18n\Time;

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
        //
    }

    public function delete($id = null)
    {
        $postsModel = model('PostsModel');
        $postsModel->delete($id);

        // Remove the cache
        cache()->delete('posts');

        return redirect()->to('/posts');
    }
}
