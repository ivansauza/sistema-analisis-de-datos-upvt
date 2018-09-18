<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PeriodoThisUserRule;

use App\Periodo;

class AnalisisStoreRequest extends FormRequest
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

        return Periodo::findOrFail($this->periodo_id)->estado ? false : true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'periodo_id'        => [
                'required', 'integer' ,'exists:periodos,id', new PeriodoThisUserRule
            ], 
            'preguntas_id'      => 'required|array|distinct', 
            'preguntas_id.*'    => 'integer|exists:preguntas,id|distinct', 
            'preguntas_value'   => 'required|array|size:'. count($this->preguntas_id), 
            'preguntas_value.*' => 'integer|nullable', 
            'finalizado'        => 'boolean|nullable'
        ];
    }
}
