<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Desarrollo extends Model
{

    protected $table= "desarrollos";

    protected $fillable=['id_grupo','id_proyecto'];
//
}
