<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model {

    protected $table= "usuarios";

    protected $fillable=['rut','nombre','apellidoP','apellidoM','email','password','type'];


}
