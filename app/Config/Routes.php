<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/reservation', 'ReservationController::index');
$routes->post('/reservation/save', 'ReservationController::save');
