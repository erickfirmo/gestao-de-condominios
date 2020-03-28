<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CondominioRequest extends FormRequest
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
