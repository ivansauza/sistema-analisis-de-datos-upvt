<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnalisisRequest extends FormRequest
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
            'periodo_id'        => 'required|integer|exists:periodos,id', 
            'preguntas_id'      => 'required|array|distinct', 
            'preguntas_id.*'    => 'integer|exists:preguntas,id', 
            'preguntas_value'   => 'required|array', 
            'preguntas_value.*' => 'integer|nullable', 
        ];
    }
}
