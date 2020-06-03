<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class VisitanteRequest extends FormRequest
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
                'nome' => 'required|min:1|max:40',
                'entrada' => 'required|digits:5',
                'saida' => 'required|digits:5',
                'identidade' => 'unique:prestadores_de_servicos,id,'.$this->route('id').'|max:11|string',
                'morador_id' => 'required|numeric'
            ];
        } else {
            return [
                'nome' => 'required|min:1|max:40',
                'entrada' => 'required|digits:5',
                'saida' => 'required|min:1|max:3',
                'identidade' => 'max:11|string',
                'morador_id' => 'required|numeric'
            ];
        }
    }

    public function attributes()
    {
        return [
            'descricao' => 'descrição',
            'saida' => 'saída',
            'observacoes' => 'observações',
            'morador_id' => 'morador'
        ];
    }

}
