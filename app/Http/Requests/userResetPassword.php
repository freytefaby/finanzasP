<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userResetPassword extends FormRequest
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
            'password' => 'bail|required|max:50|min:6|alpha_num',
            'password_confirmation' => 'bail|required_with:password|same:password|max:50|min:6|alpha_num'
        ];


    }

    public function messages()
        {
            return [
                
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
