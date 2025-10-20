<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Main
$routes->get('/', 'Users::index');

// Authentication
$routes->get('login', 'Authentication::login');
$routes->post('login', 'Authentication::loginPost');
$routes->get('/signup', 'Authentication::signup');
$routes->post('/signup', 'Authentication::signupPost');
$routes->post('logout', 'Authentication::logout');

// Admin
$routes->get('admin/dashboard', 'Admin::dashboard');

// News
$routes->get('news', 'Users::news');
$routes->get('news/moodboard', 'Users::moodboard');
$routes->get('news/roadmap', 'Users::roadmap');
