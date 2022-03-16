<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLogin extends FormRequest
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
            'name' => 'required|min:3|max:32',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:32|confirmed',
            'password_confirmation' => 'required|min:6|max:32'
        ];
    }
    public function messages()
    {

        return [
            'name.required' => 'Você deve inserir um nome para o aluno(a).',
            'name.max' => 'Nome deve ter até 32 caracteres',
            'name.min' => 'você  deve inserir um nome de no mínimo de 3 caracteres',
            'email.required' => 'você deve inserir um email',
            'email.email' => 'você deve inserir um email válido',
            'email.unique' => 'email já cadastrado',
            'ano_matricula.required' => 'você deve inserir o ano de matricula do aluno(a)',
            'password.required' => 'você deve inserir uma senha',
            'password.min' => 'você deve informar uma senha de no mínimo 6 caracteres',
            'password.max' => 'voocê deve informar uma senha de no máximo de 32 caracteres',
            'password_confirmation.required' => 'você deve inserir a confirmação de senha',
            'password_confirmation.min' => 'você deve informar uma senha de no mínimo 6 caracteres',
            'password_confirmation.max' => 'voocê deve informar uma senha de no máximo de 32 caracteres',
        ];
    }
}
