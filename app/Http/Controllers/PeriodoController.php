<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ProgramasEmptyValidate;

use App\Http\Requests\PeriodoRequest;

use App\Programa;
use App\Periodo;

class PeriodoController extends Controller
{
    use ProgramasEmptyValidate;
    
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $periodos = Programa::getPredeterminado()
            ->periodos
            ->sortBy('posicion');

        return view('periodo/index', compact('periodos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periodo/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request\PeriodoRequest  $request
     * @return mixed
     */
    public function store(PeriodoRequest $request)
    {
        $periodo = new Periodo($request->all());
        $periodo->programa_id = Programa::getPredeterminado()->id;
        $periodo->save();

        return redirect()->route('periodos.edit', $periodo->id)
            ->with('info', ['type' => 'success', 'message' => 'Periodo guardado con éxito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periodo  $periodo
     * @return mixed
     */
    public function show(Periodo $periodo)
    {
        $this->authorize('access', $periodo);

        return view('periodo/show', compact('periodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periodo  $periodo
     * @return mixed
     */
    public function edit(Periodo $periodo)
    {
        $this->authorize('access', $periodo);
        
        return view('periodo/edit', compact('periodo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PeriodoRequest  $request
     * @param  integer  $id
     * @return mixed
     */
    public function update(PeriodoRequest $request, $id)
    {
        $periodo = Periodo::findOrFail($id);
        $this->authorize('access', $periodo);
        $periodo->update($request->all());

        return redirect()->back()
            ->with('info', ['type' => 'success', 'message' => 'Periodo actualizado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periodo  $periodo
     * @return mixed
     */
    public function destroy(Periodo $periodo)
    {
        $this->authorize('access', $periodo);
        $periodo->delete();

        return redirect()->route('periodos.index')
            ->with('info', ['type' => 'success', 'message' => 'Periodo eliminado con éxito']);
    }

    /**
     * Actualizar la posición de todos los elementos del recurso
     *
     * @param  Request  $request
     * @return array
     */
    public function posicionUpdate(Request $request)
    {
        $data = $request->validate([
            'items'   => 'array|distinct', 
            'items.*' => 'integer|exists:periodos,id'
        ]);
        
        foreach ($data['items'] as $key => $item) 
        {
            $periodo = Periodo::findOrFail($id);
            $this->authorize('access', $periodo);
            $periodo->posicion = $key;
            $periodo->save();
        }

        return ['status' => true];
    }
}