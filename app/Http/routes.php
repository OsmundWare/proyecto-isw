<?php


//RUTAS MIGUEL
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









//RUTAS MARCOS
Route::resource('grupos','GruposController');

Route::get('grupos/{id}/agregar','GruposController@agregar');

Route::post('grupos','GruposController@index');

//Route::get('documentos', 'PdfController@invoice');
Route::get('documentos',[

    'uses' => 'PdfController@invoice',
    'as'   => 'documentos.invoice'
//
]);










































//RUTAS BAYRON
Route::group(['prefix' => 'admin'], function(){

    Route::resource('participante','ParticipanteController');
    Route::get('participante/{id}/edit',[

        'uses' => 'ParticipanteController@edit',
        'as'   => 'admin.participante.destroy'

    ]);

});


Route::resource('sproyectos','SproyectosController');







