<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userC extends FormRequest
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
            'email'=>'bail|required|max:100|min:3|email|unique:users,email',
            'password' => 'bail|required|max:50|min:6|alpha_num',
            'password_confirmation' => 'bail|required_with:password|same:password|max:50|min:6|alpha_num'
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
                'password.required'=>'Contraseña es requerido',
                'password.max'=>'Contraseña no debe superar los 50 caracteres',
                'password.min'=>'Contraseña debe tener almenos 6 caracteres',
                'password.alpha_num'=>'Contraseña no debe contener espacios en blanco ni caracteres especiales',
                'password_confirmation.required_with'=>'Contraseña de confirmacion es requerido',
                'password_confirmation.max'=>'Contraseña de confirmacion no debe superar los 50 caracteres',
                'password_confirmation.min'=>'Contraseña de confirmacion debe tener almenos 6 caracteres',
                'password_confirmation.alpha_num'=>'Contraseña de confirmacion no debe contener espacios en blanco ni caracteres especiales',

            ];
        }
}
