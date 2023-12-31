<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/insert', 'Home::insert');
$routes->post ('/actioninsert', 'Home::actioninsert');
$routes->get('/delete/(:any)', 'Home::delete/$1');
$routes->get('/update/(:any)', 'Home::update/$1');