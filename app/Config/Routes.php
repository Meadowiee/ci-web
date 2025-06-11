<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('blog', static function ($routes) {
    $routes->get('/', 'Blog::index');
    $routes->get('(:any)', 'Blog::$1');
});

$routes->group('salam', static function($routes) {
    $routes->get('/', 'Salam::index');
    $routes->get('(:any)', 'Salam::$1');
});

$routes->group('belajar', static function($routes) {
    $routes->get('/', 'Belajar::index');
    $routes->get('(:any)', 'Belajar::$1');
});

$routes->group('registrasi', static function($routes) {
    $routes->get('/', 'Registrasi::index');
    $routes->get('(:any)', 'Registrasi::$1');
});

$routes->group('belajar-helper', static function($routes) {
    $routes->get('/', 'BelajarHelper::index');
    $routes->get('(:any)', 'BelajarHelper::$1');
});

$routes->group('belajar-library', static function($routes) {
    $routes->get('/', 'BelajarLibrary::index');
    $routes->get('(:any)', 'BelajarLibrary::$1');
});

$routes->group('dashboard', static function($routes) {
    $routes->get('/', 'Template::index');
    $routes->get('(:any)', 'Template::$1');
});

$routes->group('mahasiswa', static function($routes) {
    $routes->get('/', 'Mahasiswa::index');
    $routes->get('(:any)', 'Mahasiswa::$1');
    $routes->post('submit', 'Mahasiswa::submit');
    $routes->post('update/(:segment)', 'Mahasiswa::update/$1');
});

$routes->group('dosen', static function($routes) {
    $routes->get('/', '\App\Modules\Dosen\Controllers\Dosen::index');
    $routes->get('(:any)', '\App\Modules\Dosen\Controllers\Dosen::$1');
    $routes->post('submit', '\App\Modules\Dosen\Controllers\Dosen::submit');
    $routes->post('update/(:segment)', '\App\Modules\Dosen\Controllers\Dosen::update/$1');
});

// $routes->group('api', ['namespace' => '\App\Modules\Produk\Controllers'],
// function($routes) {
//     $routes->resource('produk');
// });

$routes->group('produk', static function($routes) {
    $routes->get('/', '\App\Modules\Produk\Controllers\Produk::index');      
    $routes->get('(:num)', '\App\Modules\Produk\Controllers\Produk::show/$1');
    $routes->post('/', '\App\Modules\Produk\Controllers\Produk::create');         $routes->put('(:num)', '\App\Modules\Produk\Controllers\Produk::update/$1'); // PUT update
    $routes->delete('(:num)', '\App\Modules\Produk\Controllers\Produk::delete/$1'); // DELETE
});

/**
 * How to create a new routes and things
 * 
 * 1. Create view -> using smaller case or v_etc
 * 2. Create controller to call index and function -> use title case
 * 3. Create model if you want to
 *  */ 
?>
