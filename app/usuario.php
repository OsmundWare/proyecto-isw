<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model {

    protected $table= "usuarios";

    protected $fillable=['nombre','apellidoP','apellidoM','email','password','estadoRegistro','type'];


}
