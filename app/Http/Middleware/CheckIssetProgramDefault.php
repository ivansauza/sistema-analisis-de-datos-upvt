<?php

namespace App\Http\Middleware;

use Closure;

class CheckIssetProgramDefault
{
    /**
     * Revisar si el usuario actual tiene un programa
     * predeterminado, si no, redireccionar a programas.index
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( ! auth()->user()->programas()->where('predeterminado', '=', 1)->first() ) {
            return redirect()->route('programas.index')
                ->with('info', ['type' => 'danger', 'message' => 'Seleccione un Programa Educativo como predeterminado.']);
        }

        return $next($request);
    }
}
