<?php

namespace App\Http\Controllers;

use App\Subindicador;
use Illuminate\Http\Request;
use App\Http\Requests\SubindicadorRequest;

use App\Indicador;
use App\Programa;

class SubindicadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subindicador.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicadores = Indicador::get()->pluck('nombre', 'id');
        $preguntas   = Programa::getPredeterminado()->preguntas
            ->pluck('nombre', 'id');

        return view('subindicador.create', compact('indicadores', 'preguntas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubindicadorRequest $request)
    {
        $subindicador = Subindicador::create($request->all());

        return redirect()->route('subindicadores.edit', $subindicador->id)
            ->with('info', ['type' => 'success', 'message' => 'Subindicador guardado con éxito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subindicador  $subindicador
     * @return \Illuminate\Http\Response
     */
    public function show(Subindicador $subindicador)
    {
        return view('subindicador.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subindicador  $subindicador
     * @return \Illuminate\Http\Response
     */
    public function edit(Subindicador $subindicador)
    {
        $indicadores = Indicador::get()->pluck('nombre', 'id');
        $preguntas   = Programa::getPredeterminado()->preguntas
            ->pluck('nombre', 'id');
        
        return view('subindicador.edit', compact('subindicador', 'indicadores', 'preguntas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subindicador  $subindicador
     * @return \Illuminate\Http\Response
     */
    public function update(SubindicadorRequest $request, Subindicador $subindicador)
    {
        $subindicador->update($request->all());

        return redirect()->route('subindicadores.edit', $subindicador->id)
            ->with('info', ['type' => 'success', 'message' => 'Subindicador editado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subindicador  $subindicador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subindicador $subindicador)
    {
        $subindicador->delete();

        return redirect()->route('procesos.index')
            ->with('info', ['type' => 'success', 'message' => 'Subindicador eliminado con éxito']);
    }

    public function select()
    {
        return view('subindicador.select');
    }
}
