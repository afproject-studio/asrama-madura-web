<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ====================
// HALAMAN PUBLIK
// ====================
$routes->get('/', 'Home::index');
$routes->get('profil/penghuni', 'Penghuni::index');
$routes->get('profil/sejarah', 'Profil::sejarah');
$routes->get('profil/visi-misi', 'Profil::visiMisi');

$routes->get('berita', 'Berita::index');
$routes->get('berita/detail/(:segment)', 'Berita::detail/$1');
$routes->get('galeri', 'Galeri::index');

$routes->get('kemahasiswaan/prestasi', 'Prestasi::index');
$routes->get('kemahasiswaan/kegiatan-asrama', 'KegiatanAsrama::index');

$routes->get('kegiatan-asrama', 'KegiatanAsrama::index');
$routes->get('prestasi', 'Prestasi::index');
$routes->get('kontak', 'Kontak::index');


// ====================
// AUTH ADMIN
// ====================
$routes->get('admin', 'Admin\Auth::index');
$routes->get('admin/login', 'Admin\Auth::index');
$routes->post('admin/auth/login', 'Admin\Auth::login');
$routes->get('admin/auth/logout', 'Admin\Auth::logout');


// ====================
// DASHBOARD ADMIN
// ====================
$routes->get('admin/dashboard', 'Admin\Dashboard::index');


// ====================
// BACKEND PENGHUNI
// ====================
$routes->group('admin/penghuni', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('/', 'Penghuni::index');
    $routes->get('create', 'Penghuni::create');
    $routes->post('save', 'Penghuni::save');
    $routes->get('edit/(:num)', 'Penghuni::edit/$1');
    $routes->post('update/(:num)', 'Penghuni::update/$1');
    $routes->get('delete/(:num)', 'Penghuni::delete/$1');
});


// ====================
// BACKEND BERITA
// ====================
$routes->group('admin/berita', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('/', 'Berita::index');
    $routes->get('create', 'Berita::create');
    $routes->post('save', 'Berita::save');
    $routes->get('edit/(:num)', 'Berita::edit/$1');
    $routes->post('update/(:num)', 'Berita::update/$1');
    $routes->get('delete/(:num)', 'Berita::delete/$1');
});


// ====================
// BACKEND GALERI
// ====================
$routes->group('admin/galeri', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('/', 'Galeri::index');
    $routes->get('create', 'Galeri::create');
    $routes->post('save', 'Galeri::save');
    $routes->get('edit/(:num)', 'Galeri::edit/$1');
    $routes->post('update/(:num)', 'Galeri::update/$1');
    $routes->get('delete/(:num)', 'Galeri::delete/$1');
});


// ====================
// BACKEND PRESTASI
// ====================
$routes->group('admin/prestasi', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('/', 'Prestasi::index');
    $routes->get('create', 'Prestasi::create');
    $routes->post('save', 'Prestasi::save');
    $routes->get('edit/(:num)', 'Prestasi::edit/$1');
    $routes->post('update/(:num)', 'Prestasi::update/$1');
    $routes->get('delete/(:num)', 'Prestasi::delete/$1');
});


// ====================
// BACKEND KEGIATAN ASRAMA
// ====================
$routes->group('admin/kegiatan-asrama', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('/', 'KegiatanAsrama::index');
    $routes->get('create', 'KegiatanAsrama::create');
    $routes->post('save', 'KegiatanAsrama::store');
    $routes->get('edit/(:num)', 'KegiatanAsrama::edit/$1');
    $routes->post('update/(:num)', 'KegiatanAsrama::update/$1');
    $routes->get('delete/(:num)', 'KegiatanAsrama::delete/$1');
});

// ====================
// FRONTEND
// ====================
$routes->get('kegiatan-asrama', 'KegiatanAsrama::index');
$routes->get('prestasi', 'Prestasi::index');

