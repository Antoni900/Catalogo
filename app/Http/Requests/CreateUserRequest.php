<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'phone.required' => 'El teléfono es requerido',
            'email.required' => 'El correo es requerido',
            'email.email' => 'Ingrese un correo válido',
            'password.required' => 'La contraseña es requerida'
        ];
    }
}
