<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class participante extends Model {


    protected $table= "participantes";

    protected $fillable=['id_participante','rut_usuario'];


}
