<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnalisisUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /**
         * Comprobar que el periodo del análisis aun esta abierto
         */

        return $this->analisis->periodo->estado ? false : true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'preguntas_id'      => 'required|array|distinct', 
            'preguntas_id.*'    => 'integer|exists:preguntas,id', 
            'preguntas_value'   => 'required|array', 
            'preguntas_value.*' => 'integer|nullable', 
            'finalizado'        => 'boolean|nullable'
        ];
    }
}
