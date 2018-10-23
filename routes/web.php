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


/*          RUTAS PARA LA GESTION DE PROFESOR
Route::get('/registrar_profesor', 'ProfesorController@registrar');
Route::get('/modificar_profesor', 'ProfesorController@modificar');
Route::get('/crear_profesor', 'ProfesorController@store');
*/

Route::resource('profesor','ProfesorController');
Route::get('/editar_profesor','ProfesorController@edit_inicial' );

/*  RUTAS PARA LA GESTION DE GRUPOS */
Route::resource('grupo','GrupoController');


/*  RUTAS PARA LA GESTION DE ALUMNOS */
Route::resource('alumno','AlumnoController');

/**
 *  DISTINAS RUTAS PARA LA GESTION DEL MODULO
 */
Route::get('/showRegistroModulo','ModuloController@showRegistroModulo');
Route::post('/registrarModulo','ModuloController@registrarModulo');
Route::get('/showModulos','ModuloController@mostrarModulos');
//Route::get('/getModulo/{id}','ModuloController@getModulo');
//Route::post('/editarModulo/{id}','ModuloController@editarModulo');
//Route::post('borrarModulo/{id}','ModuloController@borrarModulo');


/**
 * DISTINTAS RUTAS PARA LA GESTION DE LAS FAMILIAS PROFESIONALES
 */
Route::get('/showRegistroFamiliaProfesional','FamiliaprofesionalController@showRegistroFam');
Route::post('/registrarFamiliaProfesional','FamiliaprofesionalController@registrarFamiliaPro');
//Route::get('/showFamiliaProfesional','FamiliaprofesionalController@showFamiliaPro');


/**
  * DISTINTAS RUTAS PARA LA GESTION DE LAS OPCIONES OCUPACIONALES
  */
Route::get('/showRegistroOpcionOcupacional','OpcionocupacionalController@showRegistroOpcionOcup');
Route::post('/RegistroOpcionOcupacional','OpcionocupacionalController@registroOpcionOcup');