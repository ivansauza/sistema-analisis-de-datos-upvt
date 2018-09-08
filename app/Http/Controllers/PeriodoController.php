<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ProgramasEmptyValidate;

use App\Periodo;
use App\Programa;
use App\Http\Requests\PeriodoRequest;

class PeriodoController extends Controller
{
    use ProgramasEmptyValidate;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch ( request()->input('mostrar') ) 
        {
            case 'programa':
                $programa = auth()->user()->programas()
                    ->findOrFail( request()->input('programa_id') );

               return view('periodo/programa/index', compact('programa'));
                break;
            
            default:
                /**
                 * Extraer los periodos que pertenecen al programa
                 * actual predeterminado
                */
                $periodos = Programa::getPredeterminado()->periodos;

                return view('periodo/index', compact('periodos'));
                break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programas = auth()->user()->programas
            ->pluck('nombre', 'id');

        return view('periodo/create', compact('programas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeriodoRequest $request)
    {
        $periodo = Periodo::create($request->all());

        return redirect()->route('periodos.edit', $periodo->id)
            ->with('info', ['type' => 'success', 'message' => 'Periodo guardado con éxito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periodo $periodo
     * @return \Illuminate\Http\Response
     */
    public function show(Periodo $periodo)
    {
        return view('periodo/show', compact('periodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periodo $periodo
     * @return \Illuminate\Http\Response
     */
    public function edit(Periodo $periodo)
    {
        $programas = auth()->user()->programas->pluck('nombre', 'id');

        return view('periodo/edit', compact('periodo', 'programas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function update(PeriodoRequest $request, $id)
    {
        $periodo = Periodo::findOrFail($id);
        $periodo->update($request->all());

        return redirect()->back()
            ->with('info', ['type' => 'success', 'message' => 'Periodo actualizado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periodo $periodo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodo $periodo)
    {
        /* Comprobar que el usuario tiene permisos sobre el programa enviado */
        auth()->user()->programas()->findOrFail($periodo->programa->id);

        $periodo->delete();

        return redirect()->route('periodos.index')
            ->with('info', ['type' => 'success', 'message' => 'Periodo eliminado con éxito']);
    }

    public function programaSelect()
    {
        $programas = auth()->user()->programas->pluck('nombre', 'id');

        return view('periodo.programa.select', compact('programas'));
    }
}