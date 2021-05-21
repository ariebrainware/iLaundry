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

Route::get('paket-laundry', 'PaketController@index');
Route::get('paket-laudry/add', 'PaketController@add');
Route::post('paket-laudry/add', 'PaketController@store');
Route::get('paket-laundry/{id}', 'PaketController@edit');
Route::put('paket-laundry/{id}', 'PaketController@update');
Route::delete('paket-laundry/{id}', 'PaketController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
