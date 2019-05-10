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

Route::get('/', 'PeminjamController@index');
Route::post('/pinjam', 'PeminjamController@pinjam')->name('pinjam');

Auth::routes();

Route::get('/admin', 'adminController@index')->name('admin');
Route::get('/admin/cek/{id}', 'adminController@cek');
Route::get('/admin/konfir/{id}', 'adminController@konfir');
