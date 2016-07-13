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

Route::group(['prefix'=> 'app', 'middleware' => [  ]], function(){

	Route::get('/', 'HomeController@index');

    /*
     * Rutas estudiantes
     */
	Route::get('getEstudiantes', 'EstudianteController@getEstudiantes');
	Route::resource('estudiantes', 'EstudianteController');

	

});

Route::auth();