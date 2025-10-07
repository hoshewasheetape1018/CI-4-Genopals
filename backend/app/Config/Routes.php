<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Users::index');
$routes->get('/signup', 'Authentication::sign_up');
$routes->get('/login', 'Authentication::login');
$routes->get('/news', 'Users::news');
$routes->get('/news/moodboard', 'Users::moodboard');
$routes->get('/news/roadmap', 'Users::roadmap');
