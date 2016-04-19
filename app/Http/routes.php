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
    return view('website.index');
});

Route::get('/registrar_usuario', function () {
    return view('website.registrar_usuario');
});

Route::get('/ingresar', function () {
    return view('website.ingresar');
});

Route::post('/registrar_user', 'UsuarioController@store');

Route::post('/login', 'LoginController@store');

Route::group(['middleware' => ['admin']], function(){
	get('/administrador','AdministradorController@index');
	get('/logout','AdministradorController@logout');
	get('/administrador/mascotas','mascotasController@index');
	post('/registro_mascotas','mascotasController@store');
	get('/detalle_mascota/{id}', 'mascotasController@show');
});
