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

# authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

# registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('/', ['uses' => 'PaginasController@index','as' => 'home']);

Route::get('prueba',['uses' => 'PruebasController@index','as' => 'pruebas.index']);

Route::get('widgets/create',['uses' => 'WidgetController@create', 'as' => 'widgets.create']);

Route::get('widgets/{id}-{slug}',['uses' => 'WidgetController@show','as' => 'widgets.show']);

Route::resource('widgets','WidgetController',['except' => ['show','create']]);
//API
Route::any('api','ApiController@widgetData');