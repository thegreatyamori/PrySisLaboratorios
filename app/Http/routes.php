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
///////////////////////////////////////////////////////////////////
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
///////////////////////////////////////////////////////////////////
Route::get('campus', 'CampusController@index');
Route::get('campus/create', 'CampusController@create');
Route::get('campus/{id}/edit', 'CampusController@edit');
Route::get('campus/{id}/destroy', 'CampusController@destroy');
Route::post('campus/store', 'CampusController@store');
Route::post('campus/update', 'CampusController@update');
///////////////////////////////////////////////////////////////////
Route::get('carrera', 'CarreraController@index');
Route::get('carrera/create', 'CarreraController@create');
Route::get('carrera/{id}/edit', 'CarreraController@edit');
Route::get('carrera/{id}/destroy', 'CarreraController@destroy');
Route::post('carrera/store', 'CarreraController@store');
Route::post('carrera/update', 'CarreraController@update');
///////////////////////////////////////////////////////////////////
Route::get('control','ControlController@index');
Route::get('control/create','ControlController@create');
Route::get('control/{id}/edit','ControlController@edit');
Route::get('control/{id}/destroy','ControlController@destroy');
Route::post('control/store', 'ControlController@store');
Route::post('control/update', 'ControlController@update');
///////////////////////////////////////////////////////////////////
Route::get('docente', 'DocenteController@index');
Route::get('docente/create', 'DocenteController@create');
Route::get('docente/{id}/edit', 'DocenteController@edit');
Route::get('docente/{id}/destroy', 'DocenteController@destroy');
Route::post('docente/store', 'DocenteController@store');
Route::post('docente/update', 'DocenteController@update');
///////////////////////////////////////////////////////////////////
Route::get('empresa','EmpresaController@index');
Route::get('empresa/create','EmpresaController@create');
Route::get('empresa/{id}/edit','EmpresaController@edit');
Route::get('empresa/{id}/destroy','EmpresaController@destroy');
Route::post('empresa/store', 'EmpresaController@store');
Route::post('empresa/update', 'EmpresaController@update');
///////////////////////////////////////////////////////////////////
Route::get('horario', 'HorarioController@index');
Route::get('horario/{labId}/{perId}/create', 'HorarioController@create');
Route::get('horario/{labId}/{perId}/edit', 'HorarioController@edit');
Route::get('horario/{id}/destroy', 'HorarioController@destroy');
Route::post('horario/store', 'HorarioController@store');
Route::post('horario/update', 'HorarioController@update');
///////////////////////////////////////////////////////////////////
Route::get('institucion','InstitucionController@index');
Route::get('institucion/create','InstitucionController@create');
Route::get('institucion/{id}/edit','InstitucionController@edit');
Route::get('institucion/{id}/destroy','InstitucionController@destroy');
Route::post('institucion/store', 'InstitucionController@store');
Route::post('institucion/update', 'InstitucionController@update');
///////////////////////////////////////////////////////////////////
Route::get('laboratorio', 'LaboratorioController@index');
Route::get('laboratorio/create', 'LaboratorioController@create');
Route::get('laboratorio/{id}/edit', 'LaboratorioController@edit');
Route::get('laboratorio/{id}/destroy', 'LaboratorioController@destroy');
Route::post('laboratorio/store', 'LaboratorioController@store');
Route::post('laboratorio/update', 'LaboratorioController@update');
///////////////////////////////////////////////////////////////////
Route::get('materia', 'MateriaController@index');
Route::get('materia/create', 'MateriaController@create');
Route::get('materia/{id}/edit', 'MateriaController@edit');
Route::get('materia/{id}/destroy', 'MateriaController@destroy');
Route::post('materia/store', 'MateriaController@store');
Route::post('materia/update', 'MateriaController@update');
///////////////////////////////////////////////////////////////////
Route::get('parametro', 'ParametroController@index');
Route::get('parametro/create', 'ParametroController@create');
Route::get('parametro/{id}/edit', 'ParametroController@edit');
Route::get('parametro/{id}/destroy', 'ParametroController@destroy');
Route::post('parametro/store', 'ParametroController@store');
Route::post('parametro/update', 'ParametroController@update');
///////////////////////////////////////////////////////////////////
Route::get('periodo', 'PeriodoController@index');
Route::get('periodo/create', 'PeriodoController@create');
Route::get('periodo/{id}/edit', 'PeriodoController@edit');
Route::get('periodo/{id}/destroy', 'PeriodoController@destroy');
Route::post('periodo/store', 'PeriodoController@store');
Route::post('periodo/update', 'PeriodoController@update');

///////////////////////////////////////////////////////////////////
Route::get('reporte/horario/sala', 'ReportesController@horarioPorSalasIndex');
Route::post('reporte/horario/sala', 'ReportesController@horarioPorSalasPost');

Route::get('materiaxcarrera', 'ReportesController@materiaxcarrera');
Route::post('materiaxcarrera/store', 'ReportesController@store');
Route::get('materiaxcarrera/{per}/{car}/pdf', 'ReportesController@pdf');

Route::get('parametro/{id}/pdf', 'ParametroController@pdf');

///////////////////////////////////////////////////////////////////
// ESTAS SON LAS RUTAS QUE CREE PARA LOS REPORTES, PERO NADIE LAS HA UTILIZADO
Route::get('reporte/horario/docente', 'ReportesController@horarioPorDocenteIndex');
Route::post('reporte/horario/docente', 'ReportesController@horarioPorDocentePost');
Route::get('reporte/horario/pdfmateriasdocenteperiodo', 'ReportesController@pdfmateriasdocenteperiodo');
Route::get('reporte/hoja/control', 'ReportesController@hojaControl');
Route::get('reporte/materia/carrera', 'ReportesController@materiaPorCarrera');
Route::get('reporte/eventos', 'ReportesController@eventosOcasionales');
