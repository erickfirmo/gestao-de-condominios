<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FuncionarioRequest extends FormRequest
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
                'nome_completo' => 'required|min:3|max:80',
                'identidade' => 'required|min:1|max:11|unique:funcionarios,id,'.$this->route('id'),
                'genero' => 'required|in:masc,fem,nd',
                'entrada' => 'required|min:1|max:30',
                'saida' => 'required|min:1|max:30',
                'telefone_1' => 'required|min:1|max:11',
                'telefone_2' => 'required|min:1|max:11',
                'cargo' => 'required|min:1|max:30',
            ];
        } else {
            return [
                'nome_completo' => 'required|min:3|max:80',
                'identidade' => 'required|min:1|max:11|unique:funcionarios',
                'genero' => 'required|in:masc,fem,nd',
                'entrada' => 'required|min:1|max:30',
                'saida' => 'required|min:1|max:30',
                'telefone_1' => 'required|min:1|max:11',
                'telefone_2' => 'max:11',
                'cargo' => 'required|min:1|max:30',
            ];
        }
    }

    public function attributes()
    {
        return [
            'genero' => 'gênero',
        ];
    }

}
