<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Kasir::index');

$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);




$routes->setAutoRoute(true);
