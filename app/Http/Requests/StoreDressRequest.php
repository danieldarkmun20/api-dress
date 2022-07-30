<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDressRequest extends FormRequest
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
            "code" => "required|unique:dresses",
            "status" => "required|string",
            "dress_model_id" => "required",
            "user_id" => "required",
        ];
    }

    public function attributes()
    {
        return [
            "code" => "Codigo",
            "status" => "Estatus",
            "dress_model_id" => "Modelo de vestido",
            "user_id" => "Usuario",
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El :attribute es obligatorio.',
            'unique' => 'El :attribute ya existe.',

        ];
    }
}
