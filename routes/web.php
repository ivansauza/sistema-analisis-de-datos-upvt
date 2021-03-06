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

Route::middleware(['auth', 'activity'])->group(function () {
	Route::get('programas/{programa}/predetermined', 'ProgramaController@predetermined')
	->name('programas.predetermined');

	Route::resource('programas', 'ProgramaController');

	Route::get('/home', 'HomeController@index')
	->name('home');

	Route::post('/notificaciones/{notification}/read', 'NotificacionRead')
		->name('notificaciones.read');

	Route::post('/notificaciones/{notification}/unread', 'NotificacionUnread')
		->name('notificaciones.unread');

	Route::delete('/notificaciones/{notification}', 'NotificacionDelete')
		->name('notificaciones.destroy');
});

Route::middleware(['auth', 'programDefault', 'activity'])->group(function () {
	Route::get('periodos/{periodo}/report', 'PeriodoController@report')
		->name('periodos.report');

	Route::post('periodos/{periodo}/restore', 'PeriodoController@restore')
		->name('periodos.restore');
		
	Route::post('periodos/posicion/update', 'PeriodoController@posicionUpdate')
		->name('periodos.posicion.update');
	
	Route::resource('periodos', 'PeriodoController');

	Route::post('preguntas/{pregunta}/restore', 'PreguntaController@restore')
		->name('preguntas.restore');

	Route::post('preguntas/posicion/update', 'PreguntaController@posicionUpdate')
		->name('preguntas.posicion.update')
		->middleware('permission:encuestas.create');

	Route::resource('preguntas', 'PreguntaController');

	Route::get('analisis/select', 'AnalisisSelectPeriodo')
	->name('analisis.select');

	Route::resource('analisis', 'AnalisisController', ['parameters' => [
		'analisis' => 'analisis'
	]]);

	Route::get('encuestas/select/user', 'EncuestaSelectUser')
		->name('encuestas.select.user')
		->middleware('permission:encuestas.create');

	Route::get('encuestas/select/periodo', 'EncuestaSelectPeriodo')
		->name('encuestas.select.periodo');

	Route::resource('encuestas', 'EncuestaController');

	Route::resource('procesos', 'ProcesoController');

	Route::resource('indicadores', 'IndicadorController', ['parameters' => [
		'indicadores' => 'indicador'
	]])
		->middleware('permission:procesos.create');

	Route::resource('subindicadores', 'SubindicadorController', ['parameters' => [
		'subindicadores' => 'subindicador'
	]])
		->middleware('permission:procesos.create');

	Route::get('estadisticas', 'EstadisticaController@index')
		->name('estadisticas.index')
		->middleware('permission:estadisticas.index');
	
	Route::get('estadisticas/detalles', 'EstadisticaController@details')
		->name('estadisticas.details')
		->middleware('permission:estadisticas.details');

	Route::get('estadisticas/grafica', 'EstadisticaController@graph')
		->name('estadisticas.graph')
		->middleware('permission:estadisticas.details');

	Route::post('users/{user}/restore', 'UserController@restore')
		->name('users.restore');

	Route::get('users/{user}/actividades', 'UserController@actividades')
		->name('users.actividades');
	
	Route::resource('users', 'UserController');

	Route::group(['prefix' => 'configuracion'], function () {

		Route::get('user', 'UserSettings')
			->name('settings.user');
	
		Route::post('user', 'UserSettingsUpdate')
			->name('settings.user.update');
	});
});

Route::get('actividades', 'ShowActividades')
	->name('actividades.show');