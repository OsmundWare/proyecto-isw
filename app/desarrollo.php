<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class desarrollo extends Model {

    protected $table= "desarrollos";

    protected $fillable=['id_grupo','id_proyecto'];

}
