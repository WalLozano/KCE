<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/faq', 'Faq::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/calendar', 'Calendar::index');

// Login/register routes
$routes->get('/auth', 'Auth::login');
$routes->get('/auth/register', 'Auth::register');
$routes->post('auth/registerUser', 'Auth::registerUser');
$routes->post('form', 'Form::index');
// service('auth')->routes($routes);