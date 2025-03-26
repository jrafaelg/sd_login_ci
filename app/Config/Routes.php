<?php

use App\Controllers\Employees;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Login;
use App\Controllers\News;

/**
 * @var RouteCollection $routes
 */

//service('auth')->routes($routes);

$routes->get('/', 'Home::index');


use App\Controllers\Pages;

$routes->get('login', [Login::class, 'index'], ['as' => 'login']);
$routes->post('login', [Login::class, 'auth']);
$routes->get('login/register', [Login::class, 'register']);
$routes->post('login/register', [Login::class, 'store']);
$routes->get('login/logout', [Login::class, 'logout'], ['as' => 'logout']);

//$routes->get('login', 'AuthController\Login::login', ['as' => 'login']);

$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->get('news', [News::class, 'index'], ['as' => 'news']);
    $routes->get('news/new', [News::class, 'new']);
    $routes->post('news', [News::class, 'create']);
    $routes->get('news/(:segment)', [News::class, 'show']);
    //employees
    $routes->get('employees', [Employees::class, 'index'], ['as' => 'employees']);
    $routes->get('employees/(:segment)', [Employees::class, 'read']);
    $routes->get('employees/edit/(:segment)', [Employees::class, 'edit']);
    $routes->post('employees/update', [Employees::class, 'update']);
    $routes->get('employees/delete/(:segment)', [Employees::class, 'delete']);
    $routes->post('employees/delete', [Employees::class, 'remove']);
    $routes->get('employees/new', [Employees::class, 'new']);
    $routes->post('employees', [Employees::class, 'create']);
});


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
