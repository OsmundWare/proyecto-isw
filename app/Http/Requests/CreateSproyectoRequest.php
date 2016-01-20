<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateSproyectoRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_grupo'  	=> 'required|max:15|alpha_num',
            'titulo_sp'  		=> 'required|max:150|alpha',
            'tipo_sp'  			=> 'required|max:150|alpha',
            'descripcion_sp'  	=> 'required'
        ];
    }

}
