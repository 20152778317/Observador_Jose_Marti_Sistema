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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/estudiante','HomeController@met_estudiante');

Route::get('/docente','HomeController@met_docente');

Route::get('/asignatura','HomeController@met_Asignatura');

Route::get('/colegio','HomeController@met_Colegio');

Route::resource('colegio', 'Controlador_Colegio');

Route::get('/gestionObservador','HomeController@vista_GestionObservador');

Route::get('/generarCitacion','HomeController@vista_GenerarCitacion');

Route::get('/gestionFaltas','HomeController@vista_GestioFaltas');*/

Route::resource('asignatura','AsignaturaController');
Route::resource('docente','DocenteController');
Route::resource('colegio','ColegioController');
Route::resource('gestionObservador','GestionController');
Route::resource('generarCitacion','CitacionController');
Route::resource('gestionFaltas','FaltasController');

