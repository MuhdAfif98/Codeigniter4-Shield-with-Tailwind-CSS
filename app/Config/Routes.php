<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  Base routes
$routes->get('/', 'Home::index');

// Admin routes
$routes->get('/admin/index', 'AdminController::index');

// School routes
$routes->get('/school/index', 'SchoolController::index');

// JPNT routes
$routes->get('/jpnt/index', 'JpntController::index');

// PPD routes
$routes->get('/ppd/index', 'PpdController::index');

service('auth')->routes($routes);
