<?php

use App\Controllers\Employees;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Login;
use App\Controllers\News;
use App\Controllers\Posts;

/**
 * @var RouteCollection $routes
 */

//service('auth')->routes($routes);

$routes->get('/', 'Home::index');

$routes->get('login', [Login::class, 'index'], ['as' => 'login']);
$routes->post('login', [Login::class, 'auth']);
$routes->get('login/register', [Login::class, 'register']);
$routes->post('login/register', [Login::class, 'store']);
$routes->get('login/registerotp', [Login::class, 'registerOtp']);
$routes->post('login/registerotp', [Login::class, 'storeOtp']);
$routes->get('login/checkotp', [Login::class, 'otp']);
$routes->post('login/checkotp', [Login::class, 'checkOtp']);
$routes->get('login/logout', [Login::class, 'logout'], ['as' => 'logout']);


//$routes->get('login', 'AuthController\Login::login', ['as' => 'login']);

$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->get('news', [News::class, 'index'], ['as' => 'news']);
    $routes->get('news/new', [News::class, 'new']);
    $routes->post('news', [News::class, 'create']);
    $routes->get('news/(:segment)', [News::class, 'show']);

    //employees
    $routes->get('employees', [Employees::class, 'index'], ['as' => 'employees.index']);
    $routes->get('employees/show/(:segment)', [Employees::class, 'show'], ['filter' => 'authorize:employee.view']);
    $routes->get('employees/edit/(:segment)', [Employees::class, 'edit']);
    $routes->post('employees/update', [Employees::class, 'update']);
    //$routes->get('employees/delete/(:segment)', [Employees::class, 'delete'], ['filter' => 'authorize:employee.delete']);
    $routes->post('employees/delete', [Employees::class, 'delete'], ['filter' => 'authorize:employee.delete']);
    $routes->get('employees/new', [Employees::class, 'new']);
    $routes->post('employees/new', [Employees::class, 'create']);

    //dd($routes);

    //posts
    $routes->get('posts', [Posts::class, 'index'], ['as' => 'posts.index', 'filter' => 'authorize:post.view']);
    $routes->get('posts/new', [Posts::class, 'new'], ['as' => 'posts.new', 'filter' => 'authorize:post.add']);
    $routes->get('posts/show/(:segment)', [Posts::class, 'show'], ['as' => 'posts.show', 'filter' => 'authorize:post.view']);
    $routes->get('posts/delete/(:segment)', [Posts::class, 'delete'], ['as' => 'posts.delete', 'filter' => 'authorize:post.delete']);
    $routes->get('posts/edit/(:segment)', [Posts::class, 'edit'], ['as' => 'posts.edit', 'filter' => 'authorize:post.edit']);
});



$routes->view('403', 'errors/html/error_403', ['message' => request()->getUri()->getSegments()]);

// $routes->view(static function () {
//     return view('errors/html/error_403');
// }, 'errors/html/error_403');


//$routes->get('pages', [Pages::class, 'index']);
//$routes->get('(:segment)', [Pages::class, 'view']);

//var_dump($routes);
//exit;

// Would execute the show404 method of the App\Errors class
// Will display a custom view.
$routes->set404Override(static function () {
    // If you want to get the URI segments.
    $segments = request()->getUri()->getSegments();
    return view('errors/html/error_404', ['message' => $segments]);
});
