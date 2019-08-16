<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class userU extends FormRequest
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
            'name' => 'bail|required|max:100|min:3',
            'email'=>'bail|required|max:100|min:3|email|unique:users,email,'.Auth::id(),
    
            
        ];


    }

    public function messages()
        {
            return [
                'name.required'=>'Nombre requerido',
                'name.max'=>'Nombre no debe superar los 100 caracteres',
                'name.min'=>'Nombre debe tener mas de tres caracteres',
                'email.required'=>'El correo electronico es requerido',
                'email.max'=>'El correo no debe pasar mas de 100 caracteres',
                'email.min'=>'El correo debe tener mas de 3 caracteres',
                'email.unique'=>'El correo electronico ya existe',
                

            ];
        }
}
