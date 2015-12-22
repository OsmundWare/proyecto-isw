<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class grupo extends Model {

    protected $table= "grupos";
    protected $fillable=['id_grupo','id_participante'];

    public function participantes(){
        return $this->hasMany('app/grupo');
    }
}
