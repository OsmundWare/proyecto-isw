<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class supervisore extends Model {

    protected $table= "supervisores";

    protected $fillable=['asignatura','usuario_id'];


}
