<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Programa;
use App\Http\Requests\ProgramaRequest;

class ProgramaController extends Controller
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
        $programas = Programa::get();

        return view('programa/index', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramaRequest $request)
    {
        $programa = Programa::create($request->all());

        return redirect()->route('programas.edit', $programa->id)
            ->with('info', ['type' => 'success', 'message' => 'Programa guardado con éxito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        return view('programa/show', compact('programa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
        return view('programa/edit', compact('programa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramaRequest $request, $id)
    {
        $programa = Programa::findOrFail($id);
        $programa->update($request->all());

        return redirect()->back()
            ->with('info', ['type' => 'success', 'message' => 'Programa actualizado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        $programa->delete();

        return redirect()->route('programas.index')
            ->with('info', ['type' => 'success', 'message' => 'Programa eliminado con éxito']);
    }
}
