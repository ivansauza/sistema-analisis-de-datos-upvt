<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ProgramasEmptyValidate;

use App\Http\Requests\IndicadorRequest;

use App\Indicador;
Use App\Proceso;
Use App\Programa;

class IndicadorController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('indicador.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $procesos = Programa::getPredeterminado()
            ->procesos
            ->pluck('nombre', 'id');

        return view('indicador.create', compact('procesos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IndicadorRequest $request)
    {
        $indicador = Indicador::create($request->all());

        return redirect()->route('indicadores.edit', $indicador->id)
            ->with('info', ['type' => 'success', 'message' => 'Indicador guardado con éxito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Indicador  $indicador
     * @return \Illuminate\Http\Response
     */
    public function show(Indicador $indicador)
    {
        return view('indicador.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Indicador  $indicador
     * @return \Illuminate\Http\Response
     */
    public function edit(Indicador $indicador)
    {
        $procesos = Programa::getPredeterminado()
            ->procesos
            ->pluck('nombre', 'id');

        return view('indicador.edit', compact('indicador', 'procesos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Indicador  $indicador
     * @return \Illuminate\Http\Response
     */
    public function update(IndicadorRequest $request, Indicador $indicador)
    {
        $indicador->update($request->all());

        return redirect()->route('indicadores.edit', $indicador->id)
            ->with('info', ['type' => 'success', 'message' => 'Indicador editado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Indicador  $indicador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indicador $indicador)
    {
        $indicador->delete();

        return redirect()->route('procesos.index')
            ->with('info', ['type' => 'success', 'message' => 'Indicador eliminado con éxito']);
    }
}
