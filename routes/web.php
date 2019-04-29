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
    return redirect()->route('home');
});

Route::resource('daftarBuku', 'Data\DaftarBukuController');
Route::resource('stokBuku', 'Data\StokBukuController');
Route::resource('peminjaman', 'Data\PeminjamanController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
