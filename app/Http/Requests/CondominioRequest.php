<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CondominioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::guard('admin')->check()){


        } elseif($ee) {

        }
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
                'nome' => 'required|min:1|max:60|unique:condominios,nome,'.$this->route('id'),
                'descricao' => 'max:280',
                'cep' => 'required|max:9',
                'logradouro' => 'required|min:3|max:80',
                'numero' => 'required|min:1|max:20',
                'bairro' => 'required|max:40',
                'cidade' => 'required|max:40',
                'uf_id' => 'required',
                'complemento' => 'min:3|max:120',
                'observacoes' => 'min:3|max:200',
            ];
        } else {
            return [
                
            ];
        }
    }

    public function attributes()
    {
        return [
            
        ];
    }

}
