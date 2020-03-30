<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EmpresaRequest extends FormRequest
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
     *
     * @return array
     */
    public function rules()
    {

        if($this->input('_method') == 'PUT' || $this->input('_method') == 'PATCH') {
            return [
                'razao_social' => 'required|min:1|max:60|unique:empresas,id,'.$this->route('id'),
                'nome_fantasia' => 'required|min:1|max:60',
                'cnpj' => 'required|unique:empresas,id,'.$this->route('id'),
                'email' => 'required|min:3|max:40|',
                'telefone_1' => 'required|min:8|max:20',
                'telefone_2' => 'max:20',
                'responsavel_para_contato' => 'required|min:1|max:50',
            ];
        } else {
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

    public function attributes()
    {
        return [
            'razao_social' => 'razão social',
            'responsavel_para_contato' => 'responsável para contato',
            'cnpj' => 'CNPJ',
        ];
    }

}
