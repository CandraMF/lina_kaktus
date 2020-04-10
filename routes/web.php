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

Route::get('/', 'HomeController@index');

Route::get('/barang', 'BarangController@barang');
Route::get('/barang/pesan', 'BarangController@pesan');

Route::get('/admin/logout', 'AdminController@logout');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/login_proses', 'AdminController@login_proses');
Route::get('/admin/dashboard', 'AdminController@index');

Route::get('/admin/kategori', 'AdminController@kategori');
Route::get('/admin/barang', 'AdminController@barang');
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

Route::get('admin/transaksi', 'BarangController@transaksi');

//katalog
Route::get('/katalog', 'KatalogController@index');

if(isset($_POST['search']) ){
    Route::post('/katalog/search', 'KatalogController@search');
}else{
    Route::get('/katalog/search', function(){
        return redirect('/katalog');
    });
}

Route::get('/katalog/masuk_keranjang/{id}', 'KatalogController@masuk_keranjang');

Route::post('keranjang/login', 'UserController@login');
Route::get('keranjang/logout', 'UserController@logout');

//keranjang
Route::get('/keranjang/update/{id}/{jumlah}', 'KeranjangController@update');
Route::get('/keranjang/update_min/{id}/{jumlah}', 'KeranjangController@min');
Route::get('/keranjang', 'KeranjangController@index');
Route::get('/keranjang/hapus/{id}', 'KeranjangController@delete');
Route::get('/keranjang/pesan', 'KeranjangController@pesan');

Route::get('/home', 'HomeController@index');
Route::get('/cara_pesan', function(){
    return view('cara_pesan');
});
Route::get('/tentang', function(){
    return view('tentang');
});



