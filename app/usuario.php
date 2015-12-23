<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model {
//
    protected $table= "usuarios";
    protected $primaryKey = 'rut_usuario';

    protected $fillable=['rut_usuario','nombre','apellido_paterno','apellido_materno','correo','asignatura','password','aprobacion'];

}
