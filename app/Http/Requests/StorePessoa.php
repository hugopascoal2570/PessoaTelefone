<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePessoa extends FormRequest
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
            'nome' => 'required|min:3|max:32',
            'cpf' => 'required|unique:pessoas',
            'data_nasc' => 'required',
            'nacionalidade' => 'required|min:3|max:255'
        ];
    }

    public function messages()
    {

        return [
            'nome.required' => 'Você deve inserir um nome para a pessoa.',
            'nome.max' => 'Nome deve ter até 32 caracteres',
            'nome.min' => 'você  deve inserir um nome de no mínimo de 3 caracteres',
            'cpf.required' => 'você deve inserir um email',
            'cpf.unique' => 'CPF já cadastrado',
            'data_nasc.required' => 'você deve inserir o telefone',
            'nacionalidade.required' => 'você deve inserir uma data',
            'nacionalidade.min' => 'você deve informar no mínimo 6 caracteres',
            'nacionalidade.max' => 'voocê só pode informar um total de 255 caracteres'
        ];
    }
}
