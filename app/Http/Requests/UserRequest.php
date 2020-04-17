<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
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
                'nome' => 'required|max:255|string',
                //'email' => 'required|max:255|string|email|unique:users,'.$this->route('id'),
                'identidade' => 'required|min:10|unique:users,id,'.$this->route('id').'|max:11|string',
                'genero' => 'required|max:20|in:Masculino,Feminino,Não Definido|string',
                'entrada' => 'required|min:4|max:5|string',
                'saida' => 'required|min:4|max:5|string',
                'telefone_1' => 'required|min:10|max:11|string',
                'telefone_2' => 'min:10|max:11|string',
                'cargo' => 'required||max:30|string',
                'password' => 'required|min:6|max:255|string',
                'role_id' => 'required|in:2,3|max:1|string',
                'foto' => 'max:255',
            ];
        } else {
            return [
                'nome' => 'required|max:255|string',
                'email' => 'required|max:255|string|email|unique:users',
                'identidade' => 'required|min:10|unique:users|max:11|string',
                'genero' => 'required|max:20|in:Masculino,Feminino,Não Definido|string',
                'entrada' => 'required|min:4|max:5|string',
                'saida' => 'required|min:4|max:5|string',
                'telefone_1' => 'required|min:10|max:11|string',
                'telefone_2' => 'min:10|max:11|string',
                'cargo' => 'required||max:30|string',
                'password' => 'required|min:6|max:255|string',
                'role_id' => 'required|in:2,3|max:1|string',
                'foto' => 'max:255',
            ];
        }
    }

    public function attributes()
    {
        return [
            'genero' => 'gênero',
            'saida' => 'saída',
            'password' => 'senha',

        ];
    }

}
