<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
{
    private $store_rules = [];

    private $update_rules = [];
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return $this->getRules;
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