<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto extends Model {

    protected $table= "proyectos";

    protected $fillable=['titulo','tipoProyecto','descripcion','estadoRegistroProyecto','supervisor_id'];


}
