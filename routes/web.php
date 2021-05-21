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

Route::get('paket-laundry', 'Paket_controller@index');
Route::get('paket-laudry/add', 'Paket_controller@add');
Route::post('paket-laudry/add', 'Paket_controller@store');
Route::get('paket-laundry/{id}', 'Paket_controller@edit');
Route::put('paket-laundry/{id}', 'Paket_controller@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
