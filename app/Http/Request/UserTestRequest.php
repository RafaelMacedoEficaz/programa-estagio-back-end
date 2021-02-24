<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class UserTestRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'seu_e-mail' => [
                'required',
                'email'
            ],
            'nome' => [
                'required'
            ],
            'e-mail' => [
                'required',
                'email'
            ],
            'telefone' => [
                'required'
            ],
        ];
    }
}