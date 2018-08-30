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
