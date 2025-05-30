<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/formdata', 'Home::formdata');
$routes->post('/delete', 'Home::delete');
$routes->get('/info', 'Home::info');
