<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/reservation', 'ReservationController::index');
$routes->post('/reservation/save', 'ReservationController::save');

// Routing untuk halaman admin
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/updateStatus/(:num)/(:any)', 'AdminController::updateStatus/$1/$2');
$routes->get('/admin/delete/(:num)', 'AdminController::delete/$1');
