<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VehiculoRequest extends Request
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
            'marca'             =>  'min:4|max:15|required',
            'capacidad'         =>  'min:1|max:2|required',
            'color'             =>  'min:4|max:15|required',
            'modelo'            =>  'min:4|max:15|required',
            'placa'             =>  'min:6|max:7|required|unique:vehiculo',
            'kilometraje'       =>  'min:1|max:5|required',
            'tipo'              =>  'min:5|max:15|required',
            'precio_hora'       =>  'min:4|max:5|required'
        ];
    }
}
