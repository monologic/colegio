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

Route::group(['prefix'=> 'app', 'middleware' => [ 'auth', 'web' ]], function(){

	Route::get('/', 'HomeController@index');

    /*
     * Rutas Usuarios
     */
    Route::group(['middleware' => 'rol'], function () {
    	Route::get('getEstudiantes', 'EstudianteController@get');
		Route::resource('estudiantes', 'EstudianteController');

		Route::get('getDocentes', 'DocenteController@get');
		Route::resource('docentes', 'DocenteController');

		Route::get('getAdministrativos', 'AdministrativoController@get');
		Route::resource('administrativos', 'AdministrativoController');

		Route::get('getAdministrativos', 'AdministrativoController@get');
		Route::resource('administrativos', 'AdministrativoController');

		Route::get('getDirectivos', 'DirectivoController@get');
		Route::resource('directivos', 'DirectivoController');

		Route::get('getPadres', 'PadreController@get');
		Route::resource('padres', 'PadreController');
    });
	

	/*
    * Rutas para el gestor de contenido
    */
    /*
    * Comunicados
    */
	Route::resource('sliders', 'SliderController');
	Route::get('getComunicados', 'ComunicadoController@getComunicado');
	Route::resource('comunicados', 'ComunicadoController');

	/*
    * Noticias
    */
    Route::get('getNoticia', 'NoticiasController@getNoticia');
	Route::resource('noticias', 'NoticiasController');

	

});

Route::auth();