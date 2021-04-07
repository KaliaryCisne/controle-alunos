<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string',
            'email' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'string'    => 'Campo :attribute deve ser uma string'
        ];
    }
}
