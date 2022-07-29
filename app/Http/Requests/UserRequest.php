<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required|string",
            "lastname" => "required|string",
            "email" => "required|email|max:100|unique:users",
            "phone" => "required|digits:10",
            "password" => "required|string|min:6|confirmed",
        ];
    }

    public function attributes()
    {
        return [
            "name"=> "nombre",
            "lastname"=> "Apellido",
            "email"=> "Correo electronico",
            "phone"=> "Telefono",
            "password"=> "contraseña",
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El :attribute es obligatorio.',
            'email' => 'El :attribute debe ser una direccion valida.',
            'digits' => 'El :attribute debe ser de 10 digitos.',
            'unique' => 'El :attribute ya existe.',

        ];
    }
}
