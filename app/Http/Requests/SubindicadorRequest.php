<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubindicadorRequest extends FormRequest
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
            'nombre'       => 'required|string|max:255', 
            'valor_meta'   => 'required|integer|min:0|max:100', 
            'indicador_id' => 'required|integer|exists:indicadores,id', 
            'nota'         => 'string|nullable',
        ];
    }
}
