<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramaRequest extends FormRequest
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
        return [
            'clave' => 'required|string|max:16|unique:programas,clave,' . $this->programa, 
            'nombre' => 'required|string|unique:programas,nombre,' . $this->programa
        ];
    }
}
