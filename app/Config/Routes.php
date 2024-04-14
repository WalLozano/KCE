<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/faq', 'Faq::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/calendar', 'Calendar::index');