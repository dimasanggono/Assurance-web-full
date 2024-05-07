<?php

use CodeIgniter\Router\RouteCollection;



/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// $routes->get('/login', 'AuthCOntroller::index');
// $routes->get('/register', 'AuthCOntroller::index');
// $routes->get('/logout', 'AuthCOntroller::logout');


// $routes->group('User', ['namespace' => 'App\Controllers\User'], function ($routes) {

//     $routes->get('/', 'DashboardUser::index');

// })

// $routes->get('/DashboardAdmin', 'Admin/DashboardAdmin::index');


