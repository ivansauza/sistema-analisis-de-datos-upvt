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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('programas/{programa}/predetermined', 'ProgramaController@predetermined')
	->name('programas.predetermined');

Route::resource('programas', 'ProgramaController');

Route::post('periodos/posicion/update', 'PeriodoController@posicionUpdate')
	->name('periodos.posicion.update')
	->middleware('auth');

Route::resource('periodos', 'PeriodoController')
	->middleware('auth');

Route::post('preguntas/posicion/update', 'PreguntaController@posicionUpdate')
	->name('preguntas.posicion.update')
	->middleware('auth');

Route::resource('preguntas', 'PreguntaController')
	->middleware('auth');

Route::resource('encuestas', 'EncuestaController')
	->middleware('auth');

Route::resource('procesos', 'ProcesoController')
	->middleware('auth');

Route::resource('indicadores', 'IndicadorController', ['parameters' => [
	'indicadores' => 'indicador'
]])
	->middleware('auth');

Route::resource('subindicadores', 'SubindicadorController', ['parameters' => [
	'subindicadores' => 'subindicador'
]])
	->middleware('auth');

Route::resource('users', 'UserController')
	->middleware('auth');

Route::get('users/{id}/actividades', 'UserController@actividades')
	->name('users.actividades');

Route::get('analisis/select', 'AnalisisSelectPeriodo')
	->name('analisis.select')
	->middleware('auth');

Route::resource('analisis', 'AnalisisController', ['parameters' => [
	'analisis' => 'analisis'
]])
	->middleware('auth');

Route::get('estadisticas/details', 'EstadisticaController@details')
	->name('estadisticas.details')
	->middleware('auth');

Route::resource('estadisticas', 'EstadisticaController')
	->middleware('auth');

Route::group(['prefix' => 'configuracion'], function(){

	Route::get('user', 'UserSettings')
		->name('settings.user');

	Route::post('user', 'UserSettingsUpdate')
		->name('settings.user.update');
	
});

Route::get('actividades', 'ShowActividades')
	->name('actividades.show');