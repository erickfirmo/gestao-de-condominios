<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class OcorrenciaRequest extends FormRequest
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
                'titulo' => 'required|min:3|unique:ocorrencias,id,'.$this->route('id').'|max:40|string',
                'descricao' => 'required|min:1|max:200',
                // 'status' => 'required|in:a,b',
                'agora' => 'required|in:0,1',
                'data' => 'required_if:agora,0',
                'hora' => 'required_if:agora,0',
                'gravidade' => 'required|in:baixa,media,alta',
                'morador_id' => 'required|min:1|max:20|numeric',
            ];
        } else {
            return [
                'titulo' => 'required|min:3|max:40|string',
                'descricao' => 'required|min:1|max:200',
                // 'status' => 'required|in:a,b',
                'agora' => 'required|in:0,1',
                'data' => 'required_if:agora,1',
                'hora' => 'required_if:agora,1',
                'gravidade' => 'required|in:baixa,media,alta',
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
