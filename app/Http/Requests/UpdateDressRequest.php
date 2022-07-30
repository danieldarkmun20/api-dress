<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDressRequest extends FormRequest
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
            "code" => "unique:dresses",
            "id" => "required"
        ];
    }

    public function attributes()
    {
        return [
            "code" => "Codigo",
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
