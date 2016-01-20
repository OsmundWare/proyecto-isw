<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{

    protected $table = "supervisor";
    protected $primaryKey = 'id_supervisor';
    protected $fillable=['id_supervisor','rut_usuario'];


}
