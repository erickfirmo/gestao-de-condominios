<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
{
    private $rules = [];

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

    /**
     * Set the validation rules that apply to the request.
     *
     * @return array
     */
    public function setRules($method)
    {
        $this->rules = $method;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function getRules($method)
    {
        return $this->rules;
    }

    public function rules()
    {
        return $this->rules;
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