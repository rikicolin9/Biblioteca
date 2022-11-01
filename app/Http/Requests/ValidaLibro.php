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
            'txtisbn'=>'required',
            'txttitulo'=>'required|String',
            'txtautor'=>'required|String',
            'txtpaginas'=>'required|Number',
            'txteditorial'=>'required|String',
            'txtemail'=>'required|String|email'


        ];
    }
}
