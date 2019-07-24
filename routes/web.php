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
    return view('indexx');
});

Route::get('/utama', 'UtamaController@index');

Route::get('/utama/create', 'UtamaController@create');
Route::post('/utama', 'UtamaController@store');

Route::get('/utama/{id}', 'UtamaController@show')->name('link');

Route::get('/utama/{id}/edit', 'UtamaController@edit')->name('ngedit');
Route::put('/utama/{id}', 'UtamaController@update');

Route::delete('/utama/{id}', 'UtamaController@destroy');

//guru


Route::get('/guru', 'GuruController@index');

Route::get('/guru/create', 'GuruController@create');
Route::post('/guru', 'GuruController@store');

Route::get('/guru/{id}', 'GuruController@show')->name('link');

Route::get('/guru/{id}/edit', 'GuruController@edit')->name('ngedi');
Route::put('/guru/{id}', 'GuruController@update');

Route::delete('/guru/{id}', 'GuruController@destroy');

// koperasis



Route::get('/koperasi', 'KoperasiController@index');

Route::get('/koperasi/create', 'KoperasiController@create');
Route::post('/koperasi', 'KoperasiController@store');

Route::get('/koperasi/{id}', 'KoperasiController@show')->name('link');

Route::get('/koperasi/{id}/edit', 'KoperasiController@edit');
Route::put('/koperasi/{id}', 'KoperasiController@update');

Route::delete('/koperasi/{id}', 'KoperasiController@destroy');

//logistiks


Route::get('/logistik', 'LogistikController@index');

Route::get('/logistik/create', 'LogistikController@create');
Route::post('/logistik', 'LogistikController@store');

Route::get('/logistik/{id}', 'LogistikController@show')->name('link');

Route::get('/logistik/{id}/edit', 'LogistikController@edit');
Route::put('/logistik/{id}', 'LogistikController@update');

Route::delete('/logistik/{id}', 'LogistikController@destroy');
