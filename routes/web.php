<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//verifikasi email user
Auth::routes(['verify' => true]);
Route::get('/', 'PondasiController@index');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'AdminController@admin')->name('admin');
Route::get('/admin/tambah/profil-visi-misi', 'AdminController@tambah');
Route::post('/admin/tambah/profil-visi-misi/simpan', 'AdminController@simpan');
Route::get('/admin/edit/profil-visi-misi/{id}', 'AdminController@edit');
Route::post('/admin/edit/profil-visi-misi/simpan/{id}', 'AdminController@update');
Route::get('/admin/hapus/profil-visi-misi/{id}', 'AdminController@hapus');
Route::get('/admin/akun', 'AdminController@akun');
Route::get('/admin/tambah/akun', 'AdminController@tambah_akun');
Route::post('/admin/tambah/akun/simpan', 'AdminController@simpan_akun');
Route::get('/admin/edit/akun/{id}', 'AdminController@edit_akun');
Route::post('/admin/edit/akun/simpan/{id}', 'AdminController@update_akun');
Route::get('/admin/hapus/akun/{id}', 'AdminController@hapus_akun');

//Anggota
Route::get('/anggota', 'AnggotaController@index');
Route::get('/anggota/profil', 'AnggotaController@profil');
Route::get('/anggota/profil-lengkap/{id}', 'AnggotaController@profil_lengkap');
Route::get('/anggota/tambah', 'AnggotaController@tambah');
Route::post('/anggota/tambah/simpan', 'AnggotaController@simpan');
Route::post('/anggota/edit/{id}', 'AnggotaController@edit');
Route::post('/anggota/edit/simpan/{id}', 'AnggotaController@update');
Route::get('/anggota/hapus/{id}', 'AnggotaController@hapus');
Route::get('/anggota/recycle-bin', 'AnggotaController@recycle_bin');
Route::get('/anggota/restore/{id}', 'AnggotaController@restore');
Route::get('/anggota/hapus-permanen/{id}', 'AnggotaController@hapus_permanen');
Route::get('/anggota/cetak-pdf', 'AnggotaController@cetak_pdf');
Route::get('/anggota/export-excel', 'AnggotaController@export_excel');

//Kegiatan
Route::get('/kegiatan', 'KegiatanController@index');
Route::get('/kegiatan/detail/{id}', 'KegiatanController@detail');
Route::get('/kegiatan/tambah', 'KegiatanController@tambah');
Route::post('/kegiatan/tambah/simpan', 'KegiatanController@simpan');
Route::post('/kegiatan/edit/{id}', 'KegiatanController@edit');
Route::post('/kegiatan/edit/simpan/{id}', 'KegiatanController@update');
Route::get('/kegiatan/hapus/{id}', 'KegiatanController@hapus');
Route::get('/kegiatan/recycle-bin', 'KegiatanController@recycle_bin');
Route::get('/kegiatan/restore/{id}', 'KegiatanController@restore');
Route::get('/kegiatan/hapus-permanen/{id}', 'KegiatanController@hapus_permanen');
Route::get('/kegiatan/jenis-kegiatan', 'KegiatanController@jenis');
Route::get('/kegiatan/tambah/jenis-kegiatan', 'KegiatanController@tambah_jenis');
Route::post('/kegiatan/tambah/jenis-kegiatan/simpan', 'KegiatanController@simpan_jenis');
Route::get('/kegiatan/edit/jenis-kegiatan/{id}', 'KegiatanController@edit_jenis');
Route::post('/kegiatan/edit/jenis-kegiatan/simpan/{id}', 'KegiatanController@update_jenis');
Route::get('/kegiatan/hapus/jenis-kegiatan/{id}', 'KegiatanController@hapus_jenis');
Route::get('/kegiatan/cetak-pdf', 'KegiatanController@cetak_pdf');
Route::get('/kegiatan/export-excel', 'KegiatanController@export_excel');

//Prestasi
Route::get('/prestasi', 'PrestasiController@index');
Route::get('/prestasi/detail/{id}', 'PrestasiController@detail');
Route::get('/prestasi/tambah', 'PrestasiController@tambah');
Route::post('/prestasi/tambah/simpan', 'PrestasiController@simpan');
Route::post('/prestasi/edit/{id}', 'PrestasiController@edit');
Route::post('/prestasi/edit/simpan/{id}', 'PrestasiController@update');
Route::get('/prestasi/hapus/{id}', 'PrestasiController@hapus');
Route::get('/prestasi/recycle-bin', 'PrestasiController@recycle_bin');
Route::get('/prestasi/restore/{id}', 'PrestasiController@restore');
Route::get('/prestasi/hapus-permanen/{id}', 'PrestasiController@hapus_permanen');
Route::get('/prestasi/jenis-prestasi', 'PrestasiController@jenis');
Route::get('/prestasi/tambah/jenis-prestasi', 'PrestasiController@tambah_jenis');
Route::post('/prestasi/tambah/jenis-prestasi/simpan', 'PrestasiController@simpan_jenis');
Route::get('/prestasi/edit/jenis-prestasi/{id}', 'PrestasiController@edit_jenis');
Route::post('/prestasi/edit/jenis-prestasi/simpan/{id}', 'PrestasiController@update_jenis');
Route::get('/prestasi/hapus/jenis-prestasi/{id}', 'PrestasiController@hapus_jenis');
Route::get('/prestasi/cetak-pdf', 'PrestasiController@cetak_pdf');
Route::get('/prestasi/export-excel', 'PrestasiController@export_excel');

//Donasi
Route::get('/donasi', 'DonasiController@index');
Route::get('/donasi/detail/{id}', 'DonasiController@detail');
Route::get('/donasi/tambah', 'DonasiController@tambah');
Route::post('/donasi/tambah/simpan', 'DonasiController@simpan');
Route::post('/donasi/edit/{id}', 'DonasiController@edit');
Route::post('/donasi/edit/simpan/{id}', 'DonasiController@update');
Route::get('/donasi/hapus/{id}', 'DonasiController@hapus');
Route::get('/donasi/recycle-bin', 'DonasiController@recycle_bin');
Route::get('/donasi/restore/{id}', 'DonasiController@restore');
Route::get('/donasi/hapus-permanen/{id}', 'DonasiController@hapus_permanen');
Route::get('/donasi/jenis-rekening', 'DonasiController@jenis');
Route::get('/donasi/tambah/jenis-rekening', 'DonasiController@tambah_jenis');
Route::post('/donasi/tambah/jenis-rekening/simpan', 'DonasiController@simpan_jenis');
Route::get('/donasi/edit/jenis-rekening/{id}', 'DonasiController@edit_jenis');
Route::post('/donasi/edit/jenis-rekening/simpan/{id}', 'DonasiController@update_jenis');
Route::get('/donasi/hapus/jenis-rekening/{id}', 'DonasiController@hapus_jenis');
Route::get('/donasi/cetak-pdf', 'DonasiController@cetak_pdf');
Route::get('/donasi/export-excel', 'DonasiController@export_excel');

//front end
Route::get('/pondasi', 'PondasiController@index');
Route::get('/member', 'PondasiController@anggota');
Route::get('/member/profil/{id}', 'PondasiController@anggota_detail');
Route::get('/kegiatan-pondasi/detail/{id}', 'PondasiController@kegiatan_detail');
Route::get('/kegiatan-pondasi', 'PondasiController@kegiatan');
Route::get('/prestasi-pondasi/detail/{id}', 'PondasiController@prestasi_detail');