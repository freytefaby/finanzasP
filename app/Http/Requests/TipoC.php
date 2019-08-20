<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoC extends FormRequest
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
            'descripcion' => 'bail|required|max:50|min:1|unique:tipo_movimiento,descripcion',
            'tipo' => 'bail|required|max:50|min:1|in:credito,debito'
        ];


    }

    public function messages()
        {
            return [
                
                'descripcion.required'=>'Descripcion es requerido',
                'descripcion.max'=>'Descripcion no debe superar los 50 caracteres',
                'descripcion.min'=>'Descripcion debe tener almenos 1 caracteres',
                'descripcion.unique'=>'Esta descripcion ya existe',
                'tipo.descripcion'=>'Tipo es requerido',
                'tipo.max'=>'Tipo no debe superar los 50 caracteres',
                'tipo.min'=>'Tipo debe tener almenos 1 caracteres',
                'tipo.in'=>'Debe escoger si valor credito o debito'
        

            ];
        }
}
