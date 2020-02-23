<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return ['title' => 'required|string|max:500',];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title is required',
            'title.string'   => 'The title must be a string',
            'title.max' => 'The title is max:500'
        ];
    }

    public function all($keys = null)
    {
        return parent::all($keys);

    }
}
