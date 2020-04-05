<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ImovelRequest extends FormRequest
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
                'numero' => 'required|min:1|max:60',
                'bloco' => 'required|min:1|max:10',
                'andar' => 'required|min:1|max:3',
                'descricao' => 'max:200',
                'observacoes' => 'max:200',
                'condomonio_id' => 'required',

            ];
        } else {
            return [
                'numero' => 'required|min:1|max:60',
                'bloco' => 'required|min:1|max:10',
                'andar' => 'required|min:1|max:3',
                'descricao' => 'max:200',
                'observacoes' => 'max:200',
                'condominio_id' => 'required',

            ];
        }
    }

    public function attributes()
    {
        return [
            'descricao' => 'descrição',
            'numero' => 'número',
            'observacoes' => 'observações',
        ];
    }

}
