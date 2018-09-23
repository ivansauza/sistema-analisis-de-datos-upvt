<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actividad;

class ShowActividades extends Controller
{
    public function __invoke()
    {
        $actividades = Actividad::where('user_id', '=', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(15);

    	return view('actividad.show', compact('actividades'));
    }
}
