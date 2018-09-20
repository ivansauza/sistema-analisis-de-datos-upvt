<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ProgramasEmptyValidate;

use App\Periodo;
use App\Programa;
use App\User;

class EncuestaSelectPeriodo extends Controller
{
    use ProgramasEmptyValidate;

    public function __construct()
    {
        /**
         * Revisar si el usuario actual tiene un programa
         * predeterminado, si no, redireccionar a programas.index
         */
        $this->checkIssetDefaultPrograma();
    }

    public function __invoke()
    {
        $user = User::whereHas('programas', function ($query) {
            $query->where('programas.id', '=', Programa::getPredeterminado()->id);
        })
            ->where('disabled', '==', 0)
            ->where('id', '!=', auth()->id())
            ->findOrFail(request()->input('user_id'));

        $periodos = Periodo::get()
            ->where('programa_id', '=', Programa::getPredeterminado()->id)
            ->whereNotIn('id', $user->getEncuestasExistsPeriodos())
            ->sortBy('posicion');

        return view('encuesta.select.periodo', compact('user', 'periodos'));
    }
}
