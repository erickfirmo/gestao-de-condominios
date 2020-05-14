<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class VeiculoRequest extends FormRequest
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
                'modelo' => 'required|min:1|max:40',
                'tipo' => 'required|in:Carro,Motocicleta,Van,Mini Van,Micro-Ônibus,Outros',
                'cor' => 'required|min:1|max:20',
                'descricao' => 'required|min:1|max:200',
                'placa' => 'required|digits:7|unique:veiculos',
                'morador_id' => 'required|min:1|max:20|numeric',
            ];
        } else {
            return [
                'modelo' => 'required|min:1|max:40',
                'tipo' => 'required|in:Carro,Motocicleta,Van,Mini Van,Micro-Ônibus,Outros',
                'cor' => 'required|min:1|max:20',
                'descricao' => 'required|min:1|max:200',
                'placa' => 'required|digits:7|unique:veiculos,id,'.$this->route('id'),
                'morador_id' => 'required|min:1|max:20|numeric',
            ];
        }
    }

    public function attributes()
    {
        return [
            'descricao' => 'descrição',
            'morador_id' => 'morador'
        ];
    }

}
