<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto extends Model {
//
    protected $table= "proyectos";

    protected $fillable=['id_proyecto','titulo','tipo_proyecto','descripcion','estado_registro_proyecto','id_supervisor'];


}
