<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/blog', 'Blog::index');

$routes->group('blog', static function ($routes) {
    $routes->get('/', 'Blog::index');
    $routes->get('(:any)', 'Blog::$1');
});

$routes->group('salam', static function($routes) {
    $routes->get('/', 'Salam::index');
    $routes->get('(:any)', 'Salam::$1');
});
