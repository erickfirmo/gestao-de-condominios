<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class MoradorRequest extends FormRequest
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
                'nome' => 'required|min:1|max:80',
                'genero' => 'required|in:Masculino,Feminino,Não Definido',
                'observacoes' => 'max:400',
                'proprietario' => 'boolean',
                'imovel_id' => 'required|min:1|max:20',
            ];
        } else {
            return [
                'nome' => 'required|min:1|max:80',
                'genero' => 'required|in:Masculino,Feminino,Não Definido',
                'observacoes' => 'max:400',
                'proprietario' => 'boolean',
                'imovel_id' => 'required|min:1|max:20',
            ];
        }
    }

    public function attributes()
    {
        return [
            'observacoes' => 'observações',
            'proprietario' => 'proprietário',
            'genero' => 'gênero',
            'imovel_id' => 'imóvel'
        ];
    }

}
