<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CreateGameRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'image_url' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:1',
            'trailer_url' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'image_url.required' => 'La URL de la imagen es requerida',
            'description.required' => 'La descripción es requerida',
            'price.required' => 'El precio es requerido',
            'price.numeric' => 'El precio debe ser numérico',
            'price.min' => 'Ingrese un precio válido',
            'trailer_url' => 'La URl del trailer es requerida'
        ];
    }
}
