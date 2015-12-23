<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class supervisor extends Model {

    protected $table= "supervisores";

    protected $fillable=['id_supervisor','rut_usuario'];


}
