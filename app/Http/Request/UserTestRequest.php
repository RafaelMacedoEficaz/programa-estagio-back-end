<?php

namespace App\Http\Request;

use App\Validators\Message;
use Illuminate\Foundation\Http\FormRequest;

class UserTestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        return $this->request->count() > 0;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'seu_email' => [
                'required',
                'email'
            ],
            'nome' => [
                'required'
            ],
            'email' => [
                'required',
                'email'
            ],
            'telefone' => [
                'required'
            ],
            'rua' => [
                'required'
            ],
            'numero' => [
                'required'
            ],
            'bairro' => [
                'required'
            ],
            'cidade' => [
                'required'
            ],
            'uf' => [
                'required'
            ],
            'complemento' => [
                'string'
            ],
            'cep' => [
                'required'
            ]
        ];
    }

//    /**
//     * Get the error messages for the defined validation rules.
//     *
//     * @return array
//     */
//    public function messages()
//    {
//        return [
//            'required' => ':attribute é obrigatório.',
//            'numeric' => 'O :attribute deve ser um número.',
//            'email' => 'O :attribute informado não é válido como e-mail'
//        ];
//    }
}