<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['register'] = 'AuthController/register';
// user
$route['users'] = 'UserController';
$route['users/tambah'] = 'UserController/tambah';

$route['pendaftar'] = 'PendaftarController';
$route['pendaftar/tambah'] = 'PendaftarController/tambah';
$route['pendaftar/lihat/(:any)'] = 'PendaftarController/detail/$1';
$route['pendaftar/konfirmasi/(:any)'] = 'PendaftarController/konfirmasi/$1';
$route['daftar'] = 'PendaftarController/daftar';
$route['lengkapi/(:any)'] = 'PendaftarController/lengkapi/$1';
$route['bayar/(:any)'] = 'PendaftarController/bayar/$1';


// administrator
$route['dashboard'] = 'AdminController';
$route['frontend'] = 'Welcome/frontend';
$route['visimisi'] = 'Welcome/visimisi';
$route['profile'] = 'Welcome/profile';

// authentication
$route['logout'] = 'AuthController/logout';
$route['login'] = 'AuthController/login';

$route['default_controller'] = 'Welcome/frontend';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

