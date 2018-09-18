<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Programa;
use App\User;
use App\Periodo;

class EncuestaStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = User::whereHas('programas', function ($query) {
            $query->where('programas.id', '=', Programa::getPredeterminado()->id);
        })
            ->where('disabled', '==', 0)
            ->where('id', '!=', auth()->id())
            ->findOrFail($this->user_id);

        $periodo = Periodo::where('programa_id', '=', Programa::getPredeterminado()->id)
            ->whereNotIn('id', $user->getEncuestasExistsPeriodos())
            ->findOrFail($this->periodo_id);
        
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
            'preguntas_id'      => 'required|array|distinct', 
            'preguntas_id.*'    => 'integer|exists:preguntas,id|distinct', 
            'preguntas_value'   => 'required|array|size:'. count($this->preguntas_id), 
            'preguntas_value.*' => 'integer|nullable', 
            'finalizado'        => 'boolean|nullable'
        ];
    }
}
