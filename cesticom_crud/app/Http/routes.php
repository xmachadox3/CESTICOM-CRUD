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

//Crear 	-> Permite crear los productos   (C)
Route::post('/store', 'ProductosController@store');

//Index 	-> Permite mostrar los productos (R)
Route::resource('', 'ProductosController');

//Actualizar	-> Permite actualizar los productos (U)
Route::get('/{id}/edit', 'ProductosController@edit');
Route::patch('/{id}/update', 'ProductosController@update');

//Eliminar -> Permite eliminar un producto (D)
Route::get('/{id}/destroy', 'ProductosController@destroy');

//Buscar	-> Permite Buscar un producto (*)
Route::post('/search', 'ProductosController@search');


/*
	Route::get('home', 'HomeController@index');
	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);
*/
