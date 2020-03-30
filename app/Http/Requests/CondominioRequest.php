<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CondominioRequest extends FormRequest
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
                'nome' => 'required|min:1|max:60|unique:condominios,id,'.$this->route('id'),
                'descricao' => 'max:60',
                'cep' => 'required|min:3|max:9',
                'logradouro' => 'required|min:3|max:40',
                'numero' => 'required|min:3|max:80',
                'bairro' => 'required|min:3|max:40',
                'cidade' => 'required|min:3|max:40',
                'uf_id' => 'required|min:2|max:2',
                'complemento' => 'min:3|max:40',
                'observacoes' => 'min:3|max:40',
            ];
        } else {
            return [
                'nome' => 'required|min:1|max:60|unique:condominios',
                'descricao' => 'max:60',
                'cep' => 'required|min:3|max:9',
                'logradouro' => 'required|min:3|max:40',
                'numero' => 'required|min:3|max:80',
                'bairro' => 'required|min:3|max:40',
                'cidade' => 'required|min:3|max:40',
                'uf_id' => 'required|min:2|max:2',
                'complemento' => 'min:3|max:40',
                'observacoes' => 'min:3|max:40',
            ];
        }
    }

    public function attributes()
    {
        return [
            'descricao' => 'descrição',
            'numero' => 'número',
            'observacoes' => 'observações',
            'uf_id' => 'estado'
        ];
    }

}
