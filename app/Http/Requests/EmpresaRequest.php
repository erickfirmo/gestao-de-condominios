<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'razao_social' => 'required|min:1|max:60|unique:empresas',
            'nome_fantasia' => 'required|min:1|max:60',
            'cnpj' => 'required|digits:18|unique:empresas',
            'email' => 'required|min:3|max:40|',
            'telefone_1' => 'required|min:8|max:20',
            'telefone_2' => 'max:20',
            'responsavel_para_contato' => 'required|min:1|max:50',
        ];
    }
}
