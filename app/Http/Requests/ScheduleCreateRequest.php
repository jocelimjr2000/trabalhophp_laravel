<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleCreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'cellphone' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Preenchimento obrigatório',
            'cellphone.required' => 'Preenchimento obrigatório',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
