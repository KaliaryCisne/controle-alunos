<?php

namespace App\Http\Requests\ClassRoom;

use Illuminate\Foundation\Http\FormRequest;

class ClassRoomUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'year_execution' => 'string',
            'level' => 'string',
            'serie' => 'string',
            'shift' => 'string'
        ];
    }

    public function messages()
    {
        return [
            'string'    => 'Campo :attribute deve ser uma string'
        ];
    }
}
