<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sproyectos extends Model {

    protected $fillable = [

        'nombre_grupo',
        'titulo_sp',
        'tipo_sp',
        'descripcion_sp',
        'aprobacion_sp',
    ];
}

