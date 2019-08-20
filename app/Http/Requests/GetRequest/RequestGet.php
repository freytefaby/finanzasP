<?php

namespace App\Http\Requests\GetRequest;

use Illuminate\Foundation\Http\FormRequest;

class RequestGet extends FormRequest
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
            'parameter' => 'bail|max:100|min:3|in:descripcion,tipo,name,movimientos.descripcion,u.name',
            'search'=>'bail|max:100|min:1|required_with:parameter'
            
        ];


    }

    public function messages()
        {
            return [
                'parameter.max'=>'Parametro no debe superar los 100 caracteres',
                'parameter.min'=>'Parametro debe tener mas de tres caracteres',
                'parameter.in'=>'Parametro invalido',
                'search.max'=>'La busqueda no debe pasar mas de 100 caracteres',
                'search.min'=>'La busqueda debe tener mas de 3 caracteres',
                'search.required_with'=>'La busqueda es requerido si parametro esta presente.',
    

            ];
        }
}
