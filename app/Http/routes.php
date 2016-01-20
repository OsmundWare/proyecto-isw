<?php


Route::group(['prefix' => 'admin'], function(){

    Route::resource('usuario','registrosController');
    Route::get('usuario/{rut_usuario}/destroy',[

        'uses' => 'registrosController@destroy',
        'as'   => 'admin.usuario.destroy'

    ]);

    Route::resource('proyecto','ProyectosController');
    Route::get('proyecto/{id_proyecto}/destroy',[

        'uses' => 'ProyectosController@destroy',
        'as'   => 'admin.proyecto.destroy'

    ]);

    Route::resource('supervisor','SupervisorController');

});


Route::get('/',[

    'uses' => 'WelcomeController@index',
    'as'   => 'welcome'
//
]);
Route::get('ges',[

    'uses' => 'ProyectosController@gestion',
    'as'   => 'admin.proyecto.gestion'
//
]);




Route::resource('sproyectos','SproyectosController');











Route::resource('grupos','GruposController');

Route::get('grupos/{id}/agregar','GruposController@agregar');

Route::post('grupos','GruposController@index');


//ee








