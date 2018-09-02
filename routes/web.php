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
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('programas', 'ProgramaController');
Route::resource('periodos', 'PeriodoController');
Route::resource('preguntas', 'PreguntaController');
Route::resource('encuestas', 'EncuestaController');
Route::resource('procesos', 'ProcesoController');
Route::resource('indicadores', 'IndicadorController');
Route::resource('subindicadores', 'SubindicadorController');
Route::resource('users', 'UserController');
Route::get('users/{id}/actividades', 'UserController@actividades')
	->name('users.actividades');

Route::get('analisis/select', 'AnalisisController@select')
	->name('analisis.select');
Route::resource('analisis', 'AnalisisController');

Route::get('estadisticas/select', 'EstadisticaController@select')
	->name('estadisticas.select');
Route::get('estadisticas/show', 'EstadisticaController@show')
	->name('estadisticas.show');

Route::group(['prefix' => 'configuracion'], function(){
	Route::get('user', 'SettingController@user')
		->name('settings.user');
	Route::post('user', 'SettingController@userUpdate')
		->name('settings.user.update');
});

Route::get('actividades', 'ShowActividades')
	->name('actividades.show');