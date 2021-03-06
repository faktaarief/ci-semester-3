<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcomespotify';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['create-account'] = 'UserController/create'; 
$route['create-account/store'] = 'UserController/store'; 
$route['login'] = 'LoginController/index'; 
$route['login/verify'] = 'UserController/verify'; 
$route['login/auth'] = 'LoginController/auth';
// $route['dashboard'] = 'PagesController/index';
$route['dashboard'] = 'Welcomespotify/homedepan';
$route['playlist/(:any)'] = 'Welcomespotify/playlist';
$route['dashboard/profil'] = 'Welcomespotify/profil';
$route['dashboard/profil/edit/(:num)'] = 'Welcomespotify/edit_profil/$1';
$route['dashboard/profil/edit/store'] = 'Welcomespotify/update_profil/';


$route['admin/dashboard'] = 'UploadController/index';
$route['admin/dashboard/home'] = 'UploadController/home';
$route['admin/dashboard/upload'] = 'UploadController/admin';
$route['admin/dashboard/store'] = 'UploadController/store';
$route['admin/dashboard/daftar-lagu'] = 'UploadController/daftar';
$route['admin/dashboard/daftar-lagu/cari'] = 'UploadController/cari';
$route['admin/dashboard/daftar-lagu/edit/(:num)'] = 'UploadController/edit/$1';
$route['admin/dashboard/daftar-lagu/hapus/(:num)'] = 'UploadController/hapus/$1';

$route['admin/dashboard/daftar-genre'] = 'UploadController/daftargenre';
$route['admin/dashboard/daftar-genre/cari'] = 'UploadController/cari_genre';
$route['admin/dashboard/tambah-genre'] = 'UploadController/tambahgenre';
$route['admin/dashboard/store-genre'] = 'UploadController/storegenre';
$route['admin/dashboard/daftar-genre/edit/(:num)'] = 'UploadController/edit_genre/$1';
$route['admin/dashboard/daftar-genre/edit/store'] = 'UploadController/update_genre';
$route['admin/dashboard/daftar-genre/hapus/(:num)'] = 'UploadController/hapus_genre/$1';

$route['admin/dashboard/daftar-user'] = 'UploadController/daftaruser';
$route['admin/dashboard/daftar-user/cari'] = 'UploadController/cari_user';
$route['admin/dashboard/tambah-user'] = 'UploadController/tambahuser';
$route['admin/dashboard/store-user'] = 'UploadController/storeuser';
$route['admin/dashboard/daftar-user/edit/(:num)'] = 'UploadController/edit_user/$1';
$route['admin/dashboard/daftar-user/edit/store'] = 'UploadController/update_user';
$route['admin/dashboard/daftar-user/hapus/(:num)'] = 'UploadController/hapus_user/$1';
$route['admin/dashboard/daftar-user/delete'] = 'UploadController/deleteUser';

$route['admin/dashboard/daftar-admin'] = 'UploadController/daftaradmin';
$route['admin/dashboard/daftar-admin/cari'] = 'UploadController/cari_admin';
$route['admin/dashboard/tambah-admin'] = 'UploadController/tambahadmin';
$route['admin/dashboard/store-admin'] = 'UploadController/storeadmin';
$route['admin/dashboard/daftar-admin/edit/(:num)'] = 'UploadController/edit_admin/$1';
$route['admin/dashboard/daftar-admin/edit/store'] = 'UploadController/update_admin';
$route['admin/dashboard/daftar-admin/hapus/(:num)'] = 'UploadController/hapus_admin/$1';

$route['dashboard/premium'] = 'PagesController/pengguna_premium';
$route['dashboard/free'] = 'PagesController/pengguna_gratis';
$route['logout'] = 'LoginController/logout';
$route['playlist'] = 'Welcomespotify/pl';
$route['playlist/cari'] = 'Welcomespotify/cari';
$route['genres'] = 'Welcomespotify/genres';
// $route['genres'] = 'Welcomespotify/genres_playlist';
$route['genres/(:any)'] = 'Welcomespotify/genres_playlist';

$route['upgrade-premium'] = 'Welcomespotify/upgrade';


