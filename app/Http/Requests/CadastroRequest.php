<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|min:3',
            'email' => 'required|regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
            'telefone' => 'required|min:14|max:15'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O nome precisa ter no mínimo ter caracteres',
            'email.required' => 'O campo E-mail é obrigatório',
            'email.regex' => 'O formato do e-mail é inválido. Certifique-se de que ele contenha um "@" e um "." após o "@".',
            'telefone.required' => 'O campo telefone é obrigatório',
            'telefone.min' => 'Telefone precisa ter 11 caracteres',
            'telefone.max' => 'Telefone precisa ter 11 caracteres'
        ];
    }
}
