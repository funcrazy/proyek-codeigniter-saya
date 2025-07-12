<?php
$routes->get('/', 'Home::index');

$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/create', 'Mahasiswa::create');
$routes->post('/mahasiswa/store', 'Mahasiswa::store');
$routes->get('/mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->post('/mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');

$routes->get('/dosen', 'Dosen::index');
$routes->get('/dosen/create', 'Dosen::create');
$routes->post('/dosen/store', 'Dosen::store');
$routes->get('/dosen/edit/(:num)', 'Dosen::edit/$1');
$routes->post('/dosen/update/(:num)', 'Dosen::update/$1');
$routes->post('/dosen/delete/(:num)', 'Dosen::delete/$1');

$routes->get('/jurusan', 'Jurusan::index');
$routes->get('/jurusan/create', 'Jurusan::create');
$routes->post('/jurusan/store', 'Jurusan::store');
$routes->get('/jurusan/edit/(:num)', 'Jurusan::edit/$1');
$routes->post('/jurusan/update/(:num)', 'Jurusan::update/$1');
$routes->post('/jurusan/delete/(:num)', 'Jurusan::delete/$1');

$routes->get('/matakuliah', 'MataKuliah::index');
$routes->get('/matakuliah/create', 'MataKuliah::create');
$routes->post('/matakuliah/store', 'MataKuliah::store');
$routes->get('/matakuliah/edit/(:num)', 'MataKuliah::edit/$1');
$routes->post('/matakuliah/update/(:num)', 'MataKuliah::update/$1');
$routes->post('/matakuliah/delete/(:num)', 'MataKuliah::delete/$1');

$routes->get('/kontrak', 'Kontrak::index');
$routes->get('/kontrak/create', 'Kontrak::create');
$routes->post('/kontrak/store', 'Kontrak::store');
$routes->get('/kontrak/edit/(:num)', 'Kontrak::edit/$1');
$routes->post('/kontrak/update/(:num)', 'Kontrak::update/$1');
$routes->post('/kontrak/delete/(:num)', 'Kontrak::delete/$1');

$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/login/logout', 'Login::logout');