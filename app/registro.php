<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class registro extends Model {
//


    protected $table= "registros";

    protected $fillable=['id_registro','estado_registro','id_supervisor','id_participante','id_grupo'];

}
