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
    return view('index.home');
});
Route::get('/institucional', function () {
    return view('index.institucional');
});
Route::get('/galeria', 'GaleriaController@grid');

Route::get('/nosotros', function () {
    return view('index.nosotros');
});
Route::get('/contacto', function () {
    return view('index.contacto');
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
	
	Route::get('getActividades', 'ActividadController@get');
    Route::get('getActividad/{id}', 'ActividadController@getActividad');
	Route::resource('actividades', 'ActividadController');

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
	/*
    * Galeria
    */
	Route::get('getGaleria', 'GaleriaController@getGaleria');
    Route::post('galeria/{id}', 'GaleriaController@update');
	Route::resource('galeria', 'GaleriaController');
	/*
    * Slider
    */
	Route::get('getSlider', 'SliderController@getSlider');
    Route::post('slider/{id}', 'SliderController@update');
	Route::resource('slider', 'SliderController');
	
});

Route::auth();
Route::get('getNoticiaIndex', 'NoticiasController@getNoticiaIndex');
Route::get('getComunicadosIndex', 'ComunicadoController@getComunicadoIndex');
Route::get('getNovedadesIndex', 'NovedadController@getNovedadesIndex');
Route::get('getEnlacesIndex', 'EnlaceController@getEnlacesIndex');
Route::get('getGaleriaIndex', 'GaleriaController@getGaleriaIndex');
Route::get('getSliderIndex', 'SliderController@getSliderIndex');
Route::get('getSliderIndex', 'SliderController@getSliderIndex');