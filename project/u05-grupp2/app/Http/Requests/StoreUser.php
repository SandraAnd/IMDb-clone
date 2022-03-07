<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
/**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() //verifica los permisos o privilegios
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
            /* VALIDACION */
            'username' => 'required|max:50', //atributo name del input name="username"
            'email' => 'required|email|unique:users', //atributo name del input name="email" 
            'password' => 'required|min:3' //atributo name del input name="password"
        ];
    }

}
