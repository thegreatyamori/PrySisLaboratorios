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

Route::get('/', 'WelcomeController@index');

Route::get('/auth/login', 'WelcomeController@auth');

Route::get('periodo', 'PeriodoController@index');
Route::get('periodo/create', 'PeriodoController@create');
Route::post('periodo/store', 'PeriodoController@store');
Route::get('periodo/{id}/edit', 'PeriodoController@edit');
Route::post('periodo/update', 'PeriodoController@update');
Route::post('periodo/{id}/destroy', 'PeriodoController@destroy');

Route::get('carrera', 'CarreraController@index');
Route::get('carrera/create', 'CarreraController@create');
Route::post('carrera/store', 'CarreraController@store');
Route::get('carrera/{id}/edit', 'CarreraController@edit');
Route::post('carrera/update', 'CarreraController@update');
Route::post('carrera/{id}/destroy', 'CarreraController@destroy');

Route::get('horario', 'HorarioController@index');
Route::get('horario/{laboratorio_id}/{periodo_id}/create', 'HorarioController@create');
Route::post('horario/store', 'HorarioController@store');
Route::get('horario/{laboratorio_id}/{periodo_id}/edit', 'HorarioController@edit');
Route::post('horario/update', 'HorarioController@update');
Route::post('horario/{id}/destroy', 'HorarioController@destroy');