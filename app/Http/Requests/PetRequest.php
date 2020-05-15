<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PetRequest extends FormRequest
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
                'nome' => 'required|min:1|max:30',
                'especie' => 'required|min:1|max:30',
                'raca' => 'max:30',
                'cor' => 'required|min:1|max:30',
                'descricao' => 'max:200',
                'morador_id' => 'required|min:1|max:20|numeric',
            ];
        } else {
            return [
                'nome' => 'required|min:1|max:30',
                'especie' => 'required|min:1|max:30',
                'raca' => 'max:30',
                'cor' => 'required|min:1|max:30',
                'descricao' => 'max:200',
                'morador_id' => 'required|min:1|max:20|numeric',
            ];
        }
    }

    public function attributes()
    {
        return [
            'descricao' => 'descrição',
            'morador_id' => 'morador',
            'raca' => 'raça',
            'especie' => 'espécie'
        ];
    }

}
