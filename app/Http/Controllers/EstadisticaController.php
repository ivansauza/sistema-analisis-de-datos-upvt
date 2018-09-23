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

    public function __construct()
    {
        /**
         * Revisar si el usuario actual tiene un programa
         * predeterminado, si no, redireccionar a programas.index
         */
        $this->checkIssetDefaultPrograma();
    }
    
    public function index()
    {
        $periodos = Programa::getPredeterminado()->periodos
            ->sortBy('posicion');
        $procesos = Programa::getPredeterminado()->procesos;

        return view('estadistica.index', compact('periodos', 'procesos'));
    }

    public function details()
    {
        $periodo      = Periodo::findOrFail(request()->input('periodo'));
        $subindicador = Subindicador::findOrFail(request()->input('subindicador'));
        $roles        = Role::get();

        return view('estadistica.details', compact('roles', 'periodo', 'subindicador'));
    }

    public function graph()
    {
        $periodos = Programa::getPredeterminado()->periodos
            ->sortBy('posicion');
        $subindicador = Subindicador::findOrFail(request()->input('subindicador'));
        
    	return view('estadistica.graph', compact('subindicador', 'periodos'));
    }
}
