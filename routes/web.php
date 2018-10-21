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
    return view('index');
});

/*
Route::get('/registrar_profesor', 'ProfesorController@registrar');
Route::get('/modificar_profesor', 'ProfesorController@modificar');
Route::get('/crear_profesor', 'ProfesorController@store');
*/

Route::resource('profesor','ProfesorController');
Route::get('/editar_profesor','ProfesorController@edit_inicial' );