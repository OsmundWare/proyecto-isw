<?php namespace App;
//rr
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
//
    protected $table= "usuarios";
    protected $primaryKey = 'rut_usuario';

    protected $fillable=[
        'rut_usuario',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'asignatura',
        'aprobacion',
        'password'];

}
//uuu