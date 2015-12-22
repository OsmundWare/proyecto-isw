<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class grupo extends Model {

    protected $table= "grupos";
    protected $fillable=['nid_grupo','id_participante'];

    public function participante
}
