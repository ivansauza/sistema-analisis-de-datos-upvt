<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Programa;
use App\Periodo;

class PeriodoThisUserRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determinar si el periodo enviado existe, esta en estado 1(Abierto), 
     * si pertene al programa predeterminado actual, si no tiene encuesta
     * creada por el usuario actual logeado.
     * 
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $count = Periodo::where('id', '=', $value)
        ->where('estado', '=', 1)
        ->where('programa_id', '=', Programa::getPredeterminado()->id)
        ->whereNotIn('id', auth()->user()->getEncuestasExistsPeriodos())
        ->count();

         return $count === 1;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Error, comprueba que puede realizar la acción enviada.';
    }
}
