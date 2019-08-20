<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoU extends FormRequest
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
            'id'=>'bail|required|integer|exists:tipo_movimiento,id',
            'descripcion' => 'bail|max:50|min:1|unique:tipo_movimiento,descripcion,'.$this->get('id'),
            'tipo' => 'bail|max:50|min:1|in:credito,debito'
        ];


    }

    public function messages()
        {
            return [
                'id.required'=>'Id del tipo de movimiento es obligatorio',
                'id.exists'=>'Id no existe',
                'id.integer'=>'Id es numerico',
                'descripcion.max'=>'Descripcion no debe superar los 50 caracteres',
                'descripcion.min'=>'Descripcion debe tener almenos 1 caracteres',
                'descripcion.unique'=>'Esta descripcion ya existe',
                'tipo.max'=>'Tipo no debe superar los 50 caracteres',
                'tipo.min'=>'Tipo debe tener almenos 1 caracteres',
                'tipo.in'=>'Debe escoger si valor credito o debito'
        

            ];
        }
}
