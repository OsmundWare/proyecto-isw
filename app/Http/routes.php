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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin'], function(){

    Route::resource('usuario','registrosController');
    Route::get('usuario/{rut_usuario}/destroy',[

        'uses' => 'registrosController@destroy',
        'as'   => 'admin.usuario.destroy'

    ]);
});










Route::resource('grupos','GruposController');

Route::get('grupos/{id}/agregar','GruposController@agregar');




