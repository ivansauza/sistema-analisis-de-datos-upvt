<?php

namespace App\Http\Controllers;

use App\Periodo;
use Illuminate\Http\Request;
use App\Http\Requests\PeriodoRequest;

class PeriodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = Periodo::get();

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
     * @param  \Illuminate\Http\Request  $request
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
     * @param  \App\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function show(Periodo $periodo)
    {
        return view('periodo/show', compact('periodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function edit(Periodo $periodo)
    {
        return view('periodo/edit', compact('periodo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
     * @param  \App\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodo $periodo)
    {
        $periodo->delete();

        return redirect()->route('periodos.index')
            ->with('info', ['type' => 'success', 'message' => 'Periodo eliminado con éxito']);
    }
}