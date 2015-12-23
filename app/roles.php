<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model {
//
    protected $table= "roles";

    protected $fillable=['id_rol','nombre_rol','prioridad','id_participante'];


}
