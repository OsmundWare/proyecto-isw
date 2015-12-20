<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model {

    protected $table= "usuarios";

    protected $fillable=['rut_usuario','nombre','apellido_paterno','apellido_materno','correo','asignatura','password'];


}
