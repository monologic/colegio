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
    	Route::get('getEstudiante/{dni}', 'EstudianteController@getEstudiante');
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
		Route::get('getPadre/{dni}', 'PadreController@getPadre');
		Route::resource('padres', 'PadreController');
		Route::get('asignarHijo/{dni}/{id}', 'PadreController@asignarHijo');
		Route::get('asignarHijos', 'PadreController@vistaAsignarHijos');
		Route::get('getHijosPadre/{id}', 'PadreController@getHijosPadre');

		Route::resource('padres', 'PadreController');	
    });
	

	/*
    * Rutas para el gestor de contenido
    */
    /*
    * Comunicados
    */

	Route::get('getComunicados', 'ComunicadoController@getComunicado');
	Route::post('comunicados/{id}', 'ComunicadoController@update');
	Route::resource('comunicados', 'ComunicadoController');

	/*
    * Noticias
    */

    Route::get('getNoticia', 'NoticiasController@getNoticia');
    Route::post('noticias/{id}', 'NoticiasController@update');
	Route::resource('noticias', 'NoticiasController');
	/*
    * Novedades
    */
	Route::get('getNovedades', 'NovedadController@getNovedades');
    Route::post('novedades/{id}', 'NovedadController@update');
	Route::resource('novedades', 'NovedadController');
	/*
    * Bibilioteca
    */
	Route::get('getArchivos', 'ArchivoController@get');
	Route::get('getArchivoTipos', 'ArchivoController@getArchivoTipos');
    Route::post('archivos/{id}', 'ArchivoController@update');
	Route::resource('archivos', 'ArchivoController');
	/*
    * Novedades
    */
	Route::get('getEnlaces', 'EnlaceController@getEnlaces');
    Route::post('enlaces/{id}', 'EnlaceController@update');
	Route::resource('enlaces', 'EnlaceController');




	
});

Route::auth();
Route::get('getNoticiaIndex', 'NoticiasController@getNoticiaIndex');
Route::get('getComunicadosIndex', 'ComunicadoController@getComunicadoIndex');
Route::get('getNovedadesIndex', 'NovedadController@getNovedadesIndex');
Route::get('getEnlacesIndex', 'EnlaceController@getEnlacesIndex');