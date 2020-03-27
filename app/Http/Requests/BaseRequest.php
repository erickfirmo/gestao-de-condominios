<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    public function setMethodRules($method_rules)
    {
        return $this->$method_rules;
    }

    public function customValidate()
    {
        
    }

}
