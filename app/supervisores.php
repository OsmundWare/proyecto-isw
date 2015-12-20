<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class supervisores extends Model {

    protected $table= "supervisores";

    protected $fillable=['id_supervisor','rut_usuario'];


}
