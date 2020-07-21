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

Route::get('/', 'personasController@index')->name('index');

Route::get('/save', 'personasController@add')->name('save');

Route::post('/agregar', 'personasController@store')->name('store');

Route::get('/editar/{Id}', 'personasController@edit')->name('editar');

Route::put('/update/{Id}', 'personasController@update')->name('update');

Route::delete('/eliminar/{Id}', 'personasController@destroy')->name('eliminar');