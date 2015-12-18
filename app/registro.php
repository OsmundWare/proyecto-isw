<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class registro extends Model {



    protected $table= "registros";

    protected $fillable=['fecha','participante_id','supervisro_id'];

}
