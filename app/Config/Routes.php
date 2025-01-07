<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/admin/dashboard', 'AdminController::index');

$routes->group('admin', static function($routes){
    $routes->get('dashboard', 'AdminController::index', ['as' => 'admin.dashboard']);
    $routes->get('blog', 'AdminController::blogAdmin', ['as' => 'admin.blog']);    
    $routes->post('blog', 'AdminController::addBlog', ['as' => 'admin.blog']);
});

 