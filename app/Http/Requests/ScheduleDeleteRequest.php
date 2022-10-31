<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleDeleteRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id' => ['required', 'exists:schedules,id'],
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'Preenchimento obrigatório',
            'id.exists' => 'ID inválido',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
