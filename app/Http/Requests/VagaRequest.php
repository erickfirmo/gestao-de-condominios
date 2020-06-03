<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class VagaRequest extends FormRequest
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
                'identificacao' => 'required|min:1|max:60|unique:vagas,id,'.$this->route('id'),
                'observacoes' => 'max:200',
                'morador_id' => 'required|numeric|min:1|max:12',
            ];
        } else {
            return [
                'identificacao' => 'required|min:1|max:60',
                'observacoes' => 'max:200',
                'morador_id' => 'required|numeric|min:1|max:12',
            ];
        }
    }

    public function attributes()
    {
        return [
            'identificacao' => 'identificação',
            'observacoes' => 'observações',
            'morador_id' => 'morador',
        ];
    }

}
