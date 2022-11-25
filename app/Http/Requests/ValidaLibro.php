<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidaLibro extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'autor'=>'required',
            'txtisbn'=>'required|digits_between:5,9',
            'txttitulo'=>'required|String',
            'txtpaginas'=>'required|numeric',
            'txteditorial'=>'required|String',
            'txtemail'=>'required|String|email'
        ];
    }
}
