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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::redirect('/', 'bienvenido');
Route::get('bienvenido', 'Login\LoginController@login')->name('logeate');
Route::get('home', 'Admin\AdminController@index')->name('home');

Route::resource('clientes', 'Admin\ClientesController');
Route::resource('doctores', 'Admin\DoctoresController');
Route::resource('tratamientos', 'Admin\TratamientosController');
Route::resource('inventario', 'Admin\InventarioController');
Route::resource('notas', 'Admin\NotasController');
Route::resource('citas', 'Admin\CitasController');

Route::get('cliente', 'Admin\ClientesController@create')->name('cli_index');
Route::get('doctor', 'Admin\DoctoresController@create')->name('doc_index');
Route::get('tratamiento', 'Admin\TratamientosController@create')->name('treat_index');
Route::get('livesearch','Admin\ClientesController@liveSearch');