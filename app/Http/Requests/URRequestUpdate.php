<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class URRequestUpdate extends FormRequest
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
    public function rules() {
        return [
            'clave' => 'required|unique:ur,clave,'.$this->ur->clave.',clave',
            'descripcion' => 'required'
        ];
    }

    public function messages () {
        return [
            'clave.required' => 'Ingrese la clave',
            'clave.unique' => 'La clave ya existe, ingrese otra clave',
            'descripcion.required' => 'Ingrese una descripcion'
        ];
    }
}
