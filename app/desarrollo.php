<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class desarrollo extends Model {

    protected $table= "desarrollos";

    protected $fillable=['grupo_id','proyecto_id'];

}
