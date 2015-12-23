<?php namespace App\Http\Requests;

use App\Http\Requests\Request;


class UserRequest extends Request {


	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			// nombre variables de la tabla =>  tabla usuarios
			'rut_usuario'      => 'min:9|max:12|unique:usuarios|regex:/(^[0-9\-\k]+$)+/',
			'nombre'           => 'min:4|max:20',
			'apellido_paterno' => 'min:3|max:20',
			'apellido_materno' => 'min:3|max:20',
			'correo'	       => 'unique:usuarios',
			'asignatura'       => 'min:3|max:20',
			'password'	       => 'min:6|max:20'


		];
	}

}
