<?php namespace App\Http\Requests;

use App\Http\Requests\Request;


class ProyectoRequest extends Request {


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [


        ];
    }

}
