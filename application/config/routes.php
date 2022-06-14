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
//Tampil
$route['labor'] = 'Labor/tampil';
$route['alkes'] = 'Alkes/tampil';
$route['bahan'] = 'Bahan/tampil';
$route['pbahan'] = 'Pbahan/tampil';
$route['kegiatan'] = 'Kegiatan/tampil';
$route['laboran'] = 'Laboran/tampil';
$route['jadwal'] = 'Jadwal/tampil';
$route['karya'] = 'Karya/tampil';
$route['musnah'] = 'Musnah/tampil';
$route['peminjaman'] = 'Peminjaman/tampil';
$route['penggadaan'] = 'Penggadaan/tampil';


//LABORATORIUM (1)
//simpan labor
$route['simpanlabor'] = 'Labor/simpan';
//Edit Labor
$route['lab/to/edit/(:any)'] = 'Labor/ke_editlabor/$1';
//Proses Edit labor
$route['proses_edit_labor/(:any)'] = 'Labor/edit/$1';
//Hapus Labor
$route['lab/hapus/(:any)']	= 'lab/hapus/$1';


//BAHAN PRAKTEK (2)
//simpan bahan praktek
$route['simpanbahan'] = 'Bahan/simpan';


//HASIL KARYA (3)
//simpan bahan hasil karya
$route['simpankarya'] = 'Karya/simpan';
//Edit Karya
$route['karya/to/edit/(:any)'] = 'Karya/ke_editkarya/$1';
//Proses Karya
$route['proses_edit_karya/(:any)'] = 'Karya/edit/$1';
//Route Karya
$route['karya/hapus/(:any)']	= 'karya/hapus/$1';


//JADWAL (4)
////simpan jadwal
$route['simpanjadwal'] = 'Jadwal/simpan';
//edit jadwal
$route['jadwal/to/edit/(:any)'] = 'Jadwal/ke_editjadwal/$1';
//proses edit
$route['proses_edit_jadwal/(:any)'] = 'Jadwal/edit/$1';
//hapus jadwal
$route['jadwal/hapus/(:any)']	= 'Jadwal/hapus/$1';

//KEGIATAN (5)
//simpan kegiatan
$route['simpankegiatan'] = 'Kegiatan/simpan';
//Edit Kegiatan
$route['kegiatan/to/edit/(:any)'] = 'Kegiatan/ke_editkegiatan/$1';
//proses edit kegiatan
$route['proses_edit_kegiatan/(:any)'] = 'Kegiatan/edit/$1';
//Hapus Kegiatan
$route['kegiatan/hapus/(:any)']	= 'Kegiatan/hapus/$1';


//LABORAN (6)
//simpan laboran
$route['simpanlaboran'] = 'Laboran/simpan';
//Edit laboran
$route['laboran/to/edit/(:any)'] = 'Laboran/ke_editlaboran/$1';
//proses edit kegiatan
$route['proses_edit_laboran/(:any)'] = 'Laboran/edit/$1';
//Hapus Laboran
$route['laboran/hapus/(:any)']	= 'Laboran/hapus/$1';


//ALKES (7)
//Edit Alkes
$route['alkes/to/edit/(:any)'] = 'Alkes/ke_editalkes/$1';
//proses edit alkes
$route['proses_edit_alkes/(:any)'] = 'Alkes/edit/$1';
//Hapus Alkes
$route['alkes/hapus/(:any)']	= 'Alkes/hapus/$1';
//Simpan Alkes
$route['simpanalkes'] = 'Alkes/simpan';


//Musnah (8)
$route['simpanmusnah'] = 'Musnah/simpan';
//Edit Alat Musnah
$route['musnah/to/edit/(:any)'] = 'Musnah/ke_editmusnah/$1';
//Proses Alat Musnah
$route['proses_edit_musnah/(:any)'] = 'Musnah/edit/$1';
//Hapus Alat Musnah
$route['musnah/hapus/(:any)']	= 'Musnah/hapus/$1';


//Alat Musnah (9)
$route['simpanmusnah'] = 'Musnah/simpan';
//Edit Alat Musnah
$route['musnah/to/edit/(:any)'] = 'Musnah/ke_editmusnah/$1';
//Proses Alat Musnah
$route['proses_edit_musnah/(:any)'] = 'Musnah/edit/$1';
//Hapus Alat Musnah
$route['musnah/hapus/(:any)']	= 'Musnah/hapus/$1';


//Edit Pemakaian Bahan (9)
$route['pbahan/to/edit/(:any)'] = 'Pbahan/ke_editpbahan/$1';
//Proses Edit Pemakaian Bahan
$route['proses_edit_pbahan/(:any)'] = 'Pbahan/edit/$1';
//Simpan bahan
$route['simpanpbahan'] = 'Pbahan/simpan';

//Peminjaman (10)
$route['simpanpeminjaman'] = 'Peminjaman/simpan';
//Proses Edit Pemakaian Bahan
$route['peminjaman/to/edit/(:any)'] = 'Peminjaman/ke_editpeminjaman/$1';
//Proses Edit Peminjaman
$route['proses_edit_peminjaman/(:any)'] = 'Peminjaman/edit/$1';
//Hapus Alat Musnah
$route['peminjaman/hapus/(:any)']	= 'Peminjaman/hapus/$1';

//Penggadaan


// jangan diganggu
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
