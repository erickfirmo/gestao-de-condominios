<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ReservaRequest extends FormRequest
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
                'observacoes' => 'required|max:200',
                'inicio' => 'required|max:20',
                'termino' => 'required|max:20',
                'status' => 'required|max:20',
                'area_comum_id' => 'required|max:20|numeric',
                'morador_id' => 'required|max:20|numeric',
                'funcionario_id' => 'required|max:20|numeric',
            ];
        } else {
            return [
                
            ];
        }
    }

    public function attributes()
    {
        return [
            'observacoes' => 'observações',
            'morador_id' => 'morador'
        ];
    }

}
