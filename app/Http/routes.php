<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','FrontController@index');

Route::get('home','FrontController@home');

Route::resource('usuario','UsuarioController');

Route::resource('empresa','EmpresaController');

Route::resource('habitacion','HabitacionController');

Route::resource('registro','RegistroController');

Route::resource('login','LogController');

Route::get('logout','LogController@logout');

Route::get('getUser/{valor?}','UsuarioController@buscaDNI');