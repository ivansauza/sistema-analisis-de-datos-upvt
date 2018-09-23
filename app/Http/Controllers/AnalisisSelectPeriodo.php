<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Periodo;
use App\Programa;

class AnalisisSelectPeriodo extends Controller
{
    /**
     * Mostrar todos los periodos disponibles para crear una encuesta.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $periodos = Periodo::get()
            ->where('programa_id', '=', Programa::getPredeterminado()->id)
            ->whereNotIn('id', auth()->user()->getEncuestasExistsPeriodos())
            ->sortBy('posicion');

        return view('analisis.select', compact('periodos'));
    }
}
