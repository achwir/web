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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register'] = 'Auth/Register';
$route['register/proses'] = 'Auth/Register/proses';
$route['login'] = 'Auth/Login';
$route['login/proses'] = 'Auth/Login/proses';
$route['logout'] = 'Auth/Login/logout';

$route['(:any)/profil'] = 'Profil';

// Route Admin
$route['admin/dashboard'] = 'Admin/Dashboard';
$route['admin/data-barang'] = 'Admin/DataBarang';
$route['admin/barang-masuk'] = 'Admin/DataBarangMasuk';
$route['admin/barang-keluar'] = 'Admin/DataBarangKeluar';
$route['admin/data-user'] = 'Admin/DataUser';
$route['admin/data-asset'] = 'Admin/DataAsset';

// Route Sekretaris
$route['sekretaris/dashboard'] = 'Sekretaris/Dashboard';
$route['sekretaris/data-barang'] = 'Sekretaris/DataBarang';
$route['sekretaris/barang-masuk'] = 'Sekretaris/DataBarangMasuk';
$route['sekretaris/barang-keluar'] = 'Sekretaris/DataBarangKeluar';

// Route Sekretaris
$route['kadis/dashboard'] = 'Kadis/Dashboard';

// Route Data Barang
$route['data-barang/insert'] = 'Admin/DataBarang/insert';
$route['data-barang/delete/(:any)'] = 'Admin/DataBarang/delete/$1';
$route['data-barang/update'] = 'Admin/DataBarang/update';

// Route Data Asset
$route['data-asset/insert'] = 'Admin/DataAsset/insert';
$route['data-asset/delete/(:any)'] = 'Admin/DataAsset/delete/$1';
$route['data-asset/update'] = 'Admin/DataAsset/update';

// Route Data Barang Masuk
$route['barang-masuk/insert'] = 'Admin/DataBarangMasuk/insert';
$route['barang-masuk/delete/(:any)'] = 'Admin/DataBarangMasuk/delete/$1';
$route['barang-masuk/update'] = 'Admin/DataBarangMasuk/update';
$route['barang-masuk/validation'] = 'Kadis/ValidasiBarang/validation';
$route['barang-masuk/reject/(:any)'] = 'Kadis/ValidasiBarang/reject/$1';

// Route Data Barang Keluar
$route['barang-keluar/insert'] = 'Admin/DataBarangKeluar/insert';
$route['barang-keluar/delete/(:any)'] = 'Admin/DataBarangKeluar/delete/$1';
$route['barang-keluar/update'] = 'Admin/DataBarangKeluar/update';


// Route Data User
$route['data-user/insert'] = 'Admin/DataUser/insert';
$route['data-user/delete/(:any)'] = 'Admin/DataUser/delete/$1';
$route['data-user/update'] = 'Admin/DataUser/update';

// Laporan Admin
$route['admin/laporan-data-barang'] = 'Admin/Laporan/databarang';
$route['admin/laporan-data-asset'] = 'Admin/Laporan/dataasset';
$route['admin/laporan-barang-masuk'] = 'Admin/Laporan/barangmasuk';
$route['admin/laporan-barang-keluar'] = 'Admin/Laporan/barangkeluar';
$route['admin/laporan-data-user'] = 'Admin/Laporan/datauser';
$route['admin/laporan-user'] = 'Admin/Laporan/exportUser';
$route['admin/laporan-transaksi'] = 'Admin/Laporan/transaksi';
$route['admin/export-barang-masuk'] = 'Admin/Laporan/exportBarangmasuk';
$route['admin/export-barang-keluar'] = 'Admin/Laporan/exportBarangkeluar';
$route['admin/export-data-barang'] = 'Admin/Laporan/exportDataBarang';
$route['admin/export-data-asset'] = 'Admin/Laporan/exportDataAsset';

// Laporan Sekretaris
$route['sekretaris/laporan-data-barang'] = 'Sekretaris/Laporan/databarang';
$route['sekretaris/laporan-barang-masuk'] = 'Sekretaris/Laporan/barangmasuk';
$route['sekretaris/laporan-barang-keluar'] = 'Sekretaris/Laporan/barangkeluar';
$route['sekretaris/laporan-transaksi'] = 'Sekretaris/Laporan/transaksi';
$route['sekretaris/export-barang-masuk'] = 'Sekretaris/Laporan/exportBarangmasuk';
$route['sekretaris/export-barang-keluar'] = 'Sekretaris/Laporan/exportBarangkeluar';

// Laporan Kadis
$route['kadis/laporan-data-barang'] = 'Kadis/Laporan/databarang';
$route['kadis/laporan-data-asset'] = 'Kadis/Laporan/dataasset';
$route['kadis/laporan-barang-masuk'] = 'Kadis/Laporan/barangmasuk';
$route['kadis/laporan-barang-keluar'] = 'Kadis/Laporan/barangkeluar';
$route['kadis/laporan-data-user'] = 'Kadis/Laporan/datauser';
$route['kadis/laporan-user'] = 'Kadis/Laporan/exportUser';
$route['kadis/laporan-transaksi'] = 'Kadis/Laporan/transaksi';
$route['kadis/laporan-barang-pending'] = 'Kadis/Laporan/barangpending';
$route['kadis/export-barang-masuk'] = 'Kadis/Laporan/exportBarangmasuk';
$route['kadis/export-barang-pending'] = 'Kadis/Laporan/exportBarangpending';
$route['kadis/export-barang-keluar'] = 'Kadis/Laporan/exportBarangkeluar';
$route['kadis/export-data-barang'] = 'Kadis/Laporan/exportDataBarang';
$route['kadis/export-data-asset'] = 'Kadis/Laporan/exportDataAsset';

// Validasi Barang Kadis
$route['kadis/validasi-barang-masuk'] = 'Kadis/ValidasiBarang';