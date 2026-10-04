<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public Pages
$routes->get('/', 'Welcome::index');
$routes->get('/tasks', 'Tasks::index');
$routes->get('/profile', 'Profile::index');
$routes->get('/about', 'About::index');

// Authentication
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');

// Protected Tasks 
$routes->get('/tasks/new', 'Tasks::new', ['filter' => 'auth']);
$routes->post('/tasks/create', 'Tasks::create', ['filter' => 'auth']);
$routes->get('/tasks/edit/(:num)', 'Tasks::edit/$1', ['filter' => 'auth']);

$routes->post('/tasks/update/(:num)', 'Tasks::update/$1', ['filter' => 'auth']);
$routes->post('/tasks/archive/(:num)', 'Tasks::archive/$1', ['filter' => 'auth']);

// Customer Management
$routes->get('/customers', 'Customers::index', ['filter' => 'auth']);
$routes->get('/customers/new', 'Customers::new', ['filter' => 'auth']);
$routes->post('/customers', 'Customers::create', ['filter' => 'auth']);

$routes->get('/customers/edit/(:num)', 'Customers::edit/$1', ['filter' => 'auth']);
$routes->post('/customers/update/(:num)', 'Customers::update/$1', ['filter' => 'auth']);

// User Management
$routes->get('/users', 'Users::index', ['filter' => 'auth']);
$routes->get('/users/new', 'Users::new', ['filter' => 'auth']);
$routes->post('/users', 'Users::create', ['filter' => 'auth']);

$routes->get('/users/edit/(:num)', 'Users::edit/$1', ['filter' => 'auth']);
$routes->post('/users/update/(:num)', 'Users::update/$1', ['filter' => 'auth']);