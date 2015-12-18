<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class grupo extends Model {

    protected $table= "grupos";

    protected $fillable=['numeroIntegrantes','participante_id'];

}
