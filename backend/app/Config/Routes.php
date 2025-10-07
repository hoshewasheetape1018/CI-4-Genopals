<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Users::index');
$routes->get('/signup', 'Registration::index');
$routes->get('/login', 'Login::index');
$routes->get('/news', 'Users::news');
$routes->get('/news/moodboard', 'Users::moodboard');
