<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin', static function($routes){
    $routes->get('dasboard', 'AdminController::dashboard', ['as' => 'admin.dasboard']);  
});
