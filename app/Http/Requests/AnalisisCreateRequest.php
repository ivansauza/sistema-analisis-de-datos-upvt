<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Periodo;
use App\Programa;

class AnalisisCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /**
         * Verificar si el periodo enviado tiene estado 1(Abierto), si
         * pertenece al programa predeterminado con respecto al usuario 
         * actualmente logeado, si ya tiene una encuesta creada.
         */
        Periodo::where('estado', '=', 0)
            ->where('programa_id', '=', Programa::getPredeterminado()->id)
            ->whereNotIn('id', auth()->user()->getEncuestasExistsPeriodos())
            ->findOrFail(request()->input('periodo_id'));

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
            //
        ];
    }
}
