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

Route::get('periodos/programa/select', 'PeriodoController@programaSelect')
	->name('periodos.programa.select')->middleware('auth');

Route::resource('periodos', 'PeriodoController')
	->middleware('auth');

Route::get('preguntas/programa/select', 'PreguntaController@programaSelect')
	->name('preguntas.programa.select');

Route::resource('preguntas', 'PreguntaController')
	->middleware('auth');

Route::resource('encuestas', 'EncuestaController');

Route::resource('procesos', 'ProcesoController');

Route::resource('indicadores', 'IndicadorController');

Route::get('subindicadores/select', 'SubindicadorController@select')
	->name('subindicadores.select');

Route::resource('subindicadores', 'SubindicadorController');

Route::resource('users', 'UserController')
	->middleware('auth');

Route::get('users/{id}/actividades', 'UserController@actividades')
	->name('users.actividades');

Route::get('analisis/select', 'AnalisisController@select')
	->name('analisis.select');

Route::resource('analisis', 'AnalisisController')
	->middleware('auth');

Route::get('estadisticas/select', 'EstadisticaController@select')
	->name('estadisticas.select');

Route::get('estadisticas/show', 'EstadisticaController@show')
	->name('estadisticas.show');

Route::get('estadisticas/graph', 'EstadisticaController@graph')
	->name('estadisticas.graph');

Route::group(['prefix' => 'configuracion'], function(){

	Route::get('user', 'UserSettings')
		->name('settings.user');

	Route::post('user', 'UserSettingsUpdate')
		->name('settings.user.update');
});

Route::get('actividades', 'ShowActividades')
	->name('actividades.show');