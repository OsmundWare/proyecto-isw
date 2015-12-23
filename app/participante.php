<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class participante extends Model {


    protected $table= "participantes";
    protected $primaryKey='id_participante';
    protected $fillable=['id_participante','rut_usuario'];

    public function usuarios(){
        return $this->belongsTo('app/grupo');
    }

}
