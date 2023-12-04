<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index'); 
$routes->get('login', 'Home::login');               //controler menuju login
$routes->get('index_view', 'Home::index');          //button dari login mengarah ke home (index)
$routes->get('register', 'Home::register');               //controler menuju register
$routes->get('lowongan', 'Home::lowongan');               //controler menuju lowongan pekerjaan
$routes->get('contact', 'Home::contact');               //controler menuju kontak informasi
$routes->get('premium', 'Home::premium');               //controler menuju kontak page premium


$routes->get('register', 'Auth::register');                  //  controller untuk logika dafftar dan login  user
$routes->post('register', 'Auth::register');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::login');
$routes->get('logout', 'Auth::logout');



// controler untuk contact us 
$routes->get('/contact', 'ContactUsController::index');
$routes->post('/contact/save', 'ContactUsController::saveContact');

//contoler untuk read dan delete contact pada dashboard admin
$routes->get('pages/Contact_read', 'ContactReadController::index', ['as' => 'contact_read']);
$routes->get('/contactread', 'ContactReadController::index');
$routes->delete('/contactread/delete/(:num)', 'ContactReadController::delete/$1');

$routes->get('/contactread', 'ContactReadController::index');
$routes->delete('/pages/contactread/delete/(:num)', 'ContactReadController::delete/$1');


//controler untuk dashboard
$routes->get('pages/Dashboard', 'Pages::Dashboard');


//contoler  data user untuk update dan delete data pengguna
$routes->get('/pages/user', 'UserReadController::index');
$routes->get('/edit/(:num)', 'UserReadController::edit/$1');
$routes->delete('/delete/(:num)', 'UserReadController::delete/$1');
$routes->post('/pages/user/update/(:num)', 'UserReadController::update/$1');
$routes->post('/user/update/(:num)', 'UserReadController::update/$1');
$routes->get('/pages/user/edit/(:num)', 'UserReadController::edit/$1');


//controler untuk mengatur tampilan lowongan dari tabel admin
$routes->get('/pages/create_lowongan', 'Crud_lowongan::index');
$routes->post('crud_lowongan/store', 'Crud_lowongan::store');
$routes->get('/pages/read_lowongan', 'Crud_lowongan::read');






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
