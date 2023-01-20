<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required|max:255',
            'dni' => 'string|required|unique:clients|max:8',
            'ruc' => 'string|required|unique:clients|max:11',
            'address' => 'string|required|max:255',
            'phone' => 'string|required|unique:clients|,max:9',
            'email' => 'string|required|unique:clients|max:255|email:rfc,dns',
        ];
    }
    public function messages(): array
    {
        return[
            'name.required' => 'El campo es requerido',
            'name.string' => 'El valor no es correcto',
            'name.max' => 'Solo se permite 255 caracteres',

            'dni.string' => 'El valor no es correcto',
            'dni.required' => 'Este campo es requerido',
            'dni.unique' => 'Este DNI ya se encuentra registrado',
            'dni.min' => 'Se requiere de 8 caracteres',
            'dni.max' => 'Solo se permite 8 caracteres',

            'ruc.string' => 'El valor no es correcto',
            'ruc.unique' => 'El número de RUC ya se encuentra registrado',
            'ruc.min' => 'Se requiere de 11 caracteres',
            'ruc.max' => 'Solo se permite 11 caracteres',

            'address.string' => 'El valor no es correcto',
            'address.max' => 'Solo se permite 255 caracteres',

            'phone.string' => 'El valor no es correcto',
            'phone.unique' => 'El número de celular ya se encuentra registrado',
            'phone.min' => 'Se requiere de 9 caracteres',
            'phone.max' => 'Solo se permite 9 caracteres',

            'email.string' => 'El valor no es correcto',
            'email.unique' => 'La dirección de correo electrónico ya de encuentra registrado',
            'email.max' => 'Solo se permite 255 caracteres',
            'email.email' => 'No es un correo electrónico',



        ];
    }
}
