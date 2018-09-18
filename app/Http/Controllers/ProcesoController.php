<?php

namespace App\Http\Controllers;

use App\Proceso;
use Illuminate\Http\Request;
use App\Traits\ProgramasEmptyValidate;
use App\Http\Requests\ProcesoRequest;

Use App\Programa;

class ProcesoController extends Controller
{
    use ProgramasEmptyValidate;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procesos = Programa::getPredeterminado()->procesos;

        return view('proceso.index', compact('procesos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proceso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcesoRequest $request)
    {
        $proceso = new Proceso($request->all());
        $proceso->programa_id = Programa::getPredeterminado()->id;
        $proceso->save();

        return redirect()->route('procesos.edit', $proceso->id)
            ->with('info', ['type' => 'success', 'message' => 'Proceso guardado con éxito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function show(Proceso $proceso)
    {
        return view('proceso.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function edit(Proceso $proceso)
    {
        return view('proceso.edit', compact('proceso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function update(ProcesoRequest $request, Proceso $proceso)
    {
        $proceso->update($request->all());

        return redirect()->route('procesos.edit', $proceso->id)
            ->with('info', ['type' => 'success', 'message' => 'Proceso editado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proceso $proceso)
    {
        $proceso->delete();

        return redirect()->route('procesos.index')
            ->with('info', ['type' => 'success', 'message' => 'Proceso eliminado con éxito']);
    }
}
