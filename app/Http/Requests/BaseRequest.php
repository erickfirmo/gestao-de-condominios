<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    
    public $rules = [];

    public function customValidated($method)
    {
        $this->setRules($method_rules);
        return $this->validated();
    }

    /**
     * Set the validation rules that apply to the request.
     *
     * @return array
     */
    public function setRules($method)
    {
        $this->rules = $this->$method.'_rules';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function getRules()
    {
        return $this->rules;
    }

}
