<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'descricao' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'Descrição da Cor é Obrigatória!',
            '*.min' => 'A Descrição da Cor deve conter no minimo 3 caracteres.'
        ];
    }
}
