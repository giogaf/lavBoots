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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tareas', function () {
    return view('tareas.index');
});

Route::get('/tareas/new',function(Request $request){
	return view('tareas.new');
});

Route::delete('tareas/{tarea}', function(Task $tarea){
	return view('tareas.show');
});