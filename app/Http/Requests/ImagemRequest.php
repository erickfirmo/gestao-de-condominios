<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class ImagemRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [];
        // array rules constructor
        for ($i = 0; $i < count($this->file('images')); $i++)
            if($this->has('image_name_'.$i))
                array_push($rules, [$this->input('image_name_'.$i) => 'string|max:30']);

        return $rules;
    }
}
