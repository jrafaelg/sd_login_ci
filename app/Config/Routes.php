<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

service('auth')->routes($routes);

$routes->get('/', 'Home::index');

//use App\Controllers\Login;
use App\Controllers\News;
use App\Controllers\Pages;

//$routes->get('login', [Login::class, 'index']);
//$routes->post('login', [Login::class, 'auth']);

//$routes->get('login', 'AuthController\Login::login', ['as' => 'login']);

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create'], ['filter' => 'session']);
$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);