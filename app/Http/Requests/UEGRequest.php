<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UEGRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules () {
        return [
            'id' => 'required|unique:ueg,id'
        ];
    }

    public function messages () {
        return [
            'id.required' => 'La clave es requerida',
            'id.unique' => 'La clave ya existe'
        ];
    }
}
