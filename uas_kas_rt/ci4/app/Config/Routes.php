<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/home', 'Page::home');
$routes->get('/warga', 'Warga::warga_index');
$routes->get('/iuran', 'Iuran::iuran_index');


$routes->group('warga', function($routes) {
	$routes->get('index', 'Warga::warga_index');
	$routes->add('add', 'Warga::add');
	$routes->add('edit/(:any)', 'Warga::edit/$1');
	$routes->add('delete/(:any)', 'Warga::delete/$1');
});

$routes->group('iuran', function($routes) {
	$routes->get('index', 'iuran::Iuran_index');
	$routes->add('add/(:any)', 'Iuran::add/$1');
	$routes->add('edit/(:any)', 'Iuran::edit/$1');
	$routes->add('delete/(:any)', 'Iuran::delete/$1');
});

$routes->group('laporan', function($routes) {
	$routes->get('index', 'Laporan::laporan_index');
	$routes->add('add/(:any)', 'Laporan::add/$1');
	$routes->add('edit/(:any)', 'Laporan::edit/$1');
	$routes->add('delete/(:any)', 'Laporan::delete/$1');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
