<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    public function customValidated($method_rules)
    {
        return $this->validated();
    }

    /**
     * Set the validation rules that apply to the request.
     *
     * @return array
     */
    public function setRules($method)
    {
        $this->rules = $method;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function getRules($method)
    {
        return $this->rules;
    }

}
