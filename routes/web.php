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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barang', 'BarangController@barang');
Route::get('/barang/pesan', 'BarangController@pesan');

//Admin Routes

Route::prefix('admin')->group(function() {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/barang', 'AdminController@barang')->name('admin.barang'); 
    Route::get('/kategori', 'AdminController@kategori')->name('admin.kategori');
});

Route::get('/admin/barang/tambah', 'BarangController@tambah');
Route::post('admin/barang/tambah_proses', 'BarangController@tambah_proses');
Route::post('admin/barang/edit_proses', 'BarangController@edit_proses');
Route::get('admin/barang/edit/{id}', 'BarangController@edit');
Route::get('admin/barang/hapus/{id}', 'BarangController@delete');

Route::get('admin/kategori/tambah', function(){
    return view('admin/form_kategori_tambah');
});

Route::post('admin/kategori/tambah_proses', 'KategoriController@tambah_proses');
Route::post('admin/kategori/edit_proses', 'KategoriController@edit_proses');
Route::get('admin/kategori/edit/{id}', 'KategoriController@edit');
Route::get('admin/kategori/hapus/{id}', 'KategoriController@hapus');

//katalog
Route::get('/katalog', 'KatalogController@index');
Route::get('/katalog/masuk_keranjang/{id}', 'KatalogController@masuk_keranjang');

Route::post('keranjang/login', 'UserController@login');
Route::get('keranjang/logout', 'UserController@logout');

//keranjang
Route::get('/keranjang', 'KeranjangController@index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
