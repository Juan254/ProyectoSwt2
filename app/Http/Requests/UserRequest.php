<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
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
            'nombre'                =>  'min:4|max:15|required',
            'apellido'              =>  'min:4|max:15|required',
            'telefono'              =>  'min:4|max:15|required',
            'numero_licencia'       =>  'min:4|max:15|required|unique:users',
            'direccion'             =>  'min:4|max:15|required',
            'usuario'               =>  'min:4|max:15|required|unique:users',
            'contraseña'            =>  'min:4|max:15|required'
        ];
    }
}
