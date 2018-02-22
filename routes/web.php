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
    return redirect('login');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('customer', 'customerController');
Route::resource('supplier', 'supplierController');
Route::resource('barang', 'barangController');
Route::resource('kategori-barang', 'kategoriBarangController');
Route::resource('merk-barang', 'merkBarangController');

Route::get('penjualan', 'PenjualanController@index');
Route::get('penjualan/create', 'PenjualanController@create');
Route::post('penjualan', 'PenjualanController@store');
Route::get('penjualan/{id}/{nama}/{bulan}/{tahun}', 'PenjualanController@show');