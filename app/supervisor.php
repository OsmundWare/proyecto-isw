<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class supervisor extends Model {

    protected $table= "supervisor";

    protected $fillable=['id_supervisor','rut_usuario'];


}
