<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EntregaRequest extends FormRequest
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
        return [
            'nome_do_entregador' => 'required|max:40',
            'descricao' => 'required|max:200',
            'status' => 'required|max:30',
            'morador_id' => 'required|numeric',
            'enviar_notificacao' => 'numeric|:in:0,1',
        ];
    }

    public function attributes()
    {
        return [
            'descricao' => 'descrição',
            'morador_id' => 'morador',
            'enviar_notificacao' => 'enviar notificação',
        ];
    }

}
