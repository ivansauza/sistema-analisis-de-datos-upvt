<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ProgramasEmptyValidate;

use App\Programa;
use App\Periodo;
use App\Subindicador;
use Caffeinated\Shinobi\Models\Role;

class EstadisticaController extends Controller
{
    use ProgramasEmptyValidate;
    
    public function index()
    {
        $periodos = Programa::getPredeterminado()->periodos
            ->sortBy('posicion');
        $procesos = Programa::getPredeterminado()->procesos;

        return view('estadistica.index', compact('periodos', 'procesos'));
    }

    public function details()
    {
        $periodo      = Periodo::findOrFail(request()->input('subindicador'));
        $subindicador = Subindicador::findOrFail(request()->input('subindicador'));
        $roles        = Role::get();

        return view('estadistica.details', compact('roles', 'periodo', 'subindicador'));
    }

    public function graph()
    {
    	return view('estadistica.graph');
    }
}
