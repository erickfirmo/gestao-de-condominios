<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PrestadorDeServicosRequest extends FormRequest
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
                'nome' => 'required|max:40|string',
                'entrada' => 'required|max:20',
                'saida' => 'required|max:20',
                'identidade' => 'required|min:10|unique:prestadores_de_servicos,id,'.$this->route('id').'|max:11|string',
                'morador_id' => 'required|max:8',
            ];
        } else {
            return [
                'nome' => 'required|max:40|string',
                'entrada' => 'required|max:20',
                'saida' => 'required|max:20',
                'identidade' => 'required|min:10|max:11|string',
                'morador_id' => 'required|max:8',
            ];
        }
    }

    public function attributes()
    {
        return [
            'saida' => 'saída',
            'morador_id' => 'morador',
        ];
    }

}
