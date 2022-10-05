<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/room', 'Home::room');

$routes->get('/post_request', 'Form::post_request');
$routes->post('/post_response', 'Form::post_response');
$routes->get('/get_request', 'Form::get_request');
$routes->get('/get_response/(:segment)/(:segment)', 'Form::get_response/$1/$2');

//crud single table
$routes->get('/kategori', 'Kategori::list');
$routes->get('/kategori/insert', 'Kategori::insert');
$routes->post('/kategori/insert', 'Kategori::insert_save');
$routes->get('/kategori/(:segment)', 'Kategori::update/$1');
$routes->post('/kategori/(:segment)', 'Kategori::update_save/$1');
$routes->get('/kategori/delete/(:segment)', 'Kategori::delete/$1');
//end crud single table

//crud 1-Many table
$routes->get('/buku', 'Buku::list');
$routes->get('/buku/insert', 'Buku::insert');
$routes->post('/buku/insert', 'Buku::insert_save');
$routes->get('/buku/(:segment)', 'Buku::update/$1');
$routes->post('/buku/(:segment)', 'Buku::update_save/$1');
$routes->get('/buku/delete/(:segment)', 'Buku::delete/$1');
//end crud 1-Many table

// tugas
$routes->get('/provinsi', 'Provinsi::list');
$routes->get('/provinsi/insert', 'Provinsi::insert');
$routes->post('/provinsi/insert', 'Provinsi::insert_save');
$routes->get('/provinsi/(:segment)', 'Provinsi::update/$1');
$routes->post('/provinsi/(:segment)', 'Provinsi::update_save/$1');
$routes->get('/provinsi/delete/(:segment)', 'Provinsi::delete/$1');

// ming 5
$routes->get('/kota', 'Kota::list');
$routes->get('/kota/insert', 'Kota::insert');
$routes->post('/kota/insert', 'Kota::insert_save');
$routes->get('/kota/(:segment)', 'Kota::update/$1');
$routes->post('/kota/(:segment)', 'Kota::update_save/$1');
$routes->get('/kota/delete/(:segment)', 'Kota::delete/$1');

// TB 1
$routes->get('/tb1/satuan_suhu', 'SatuanSuhu::list');

$routes->get('/tb1/konversi_suhu', 'KonversiSuhu::list');
$routes->get('/tb1/konversi_suhu/insert', 'KonversiSuhu::insert');
$routes->post('/tb1/konversi_suhu/insert', 'KonversiSuhu::insert_save');
$routes->get('/tb1/konversi_suhu/(:segment)', 'KonversiSuhu::update/$1');
$routes->post('/tb1/konversi_suhu/(:segment)', 'KonversiSuhu::update_save/$1');
$routes->get('/tb1/konversi_suhu/delete/(:segment)', 'KonversiSuhu::delete/$1');

// end tugas

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
