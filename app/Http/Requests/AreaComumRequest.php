<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AreaComumRequest extends FormRequest
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
                'nome' => 'required|max:40|unique:areas_comuns,id,'.$this->route('id'),
                'abertura' => 'required|max:20',
                'fechamento' => 'required|max:20',
                'status' => 'required|max:20',
                'descricao' => 'required|max:200',
                'observacoes' => 'max:400',
            ];
        } else {
            return [
                'nome' => 'required|max:40|unique:areas_comuns',
                'abertura' => 'required|max:20',
                'fechamento' => 'required|max:20',
                'status' => 'required|max:20',
                'descricao' => 'required|max:200',
                'observacoes' => 'max:400',
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
