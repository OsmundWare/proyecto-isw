<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model {

    protected $table= "proyectos";
    protected $primaryKey = 'id_proyecto';

    protected $fillable=['id_proyecto','titulo','tipo_proyecto','descripcion'];


}
