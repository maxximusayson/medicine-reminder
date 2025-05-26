<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/medicine', 'Medicine::index');
$routes->get('/medicine/create', 'Medicine::create');
$routes->post('/medicine/store', 'Medicine::store');
$routes->get('/medicine/edit/(:num)', 'Medicine::edit/$1');
$routes->post('/medicine/update/(:num)', 'Medicine::update/$1');
$routes->get('/medicine/delete/(:num)', 'Medicine::delete/$1');
$routes->get('/medicine/markAsTaken/(:num)', 'Medicine::markAsTaken/$1');
$routes->get('/medicine/view/(:num)', 'Medicine::view/$1');

