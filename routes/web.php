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

Route::get('/', 'HomeController@getHome');
Route::get('barang', 'BarangController@getBarang');
Route::get('kode', 'BarangController@getKode');
Route::get('namabarang/{nama}', 'BarangController@getNamaBarang');
/*Route::get('Home', 'HomeController@getHome');*/
