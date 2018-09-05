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
    
    public function index()
    {
        $programas = Programa::get();

        return view('programa/index', compact('programas'));
    }

    public function create()
    {
        return view('programa/create');
    }

    public function store(ProgramaRequest $request)
    {
        $programa = Programa::create($request->all());

        return redirect()->route('programas.edit', $programa->id)
            ->with('info', 'Programa guardado con éxito');
    }

    public function show(Programa $programa)
    {
        return view('programa/show', compact('programa'));
    }

    public function edit(Programa $programa)
    {
        return view('programa/edit', compact('programa'));
    }

    public function update(ProgramaRequest $request, $id)
    {
        $programa = Programa::findOrFail($id);
        $programa->update($request->all());

        return redirect()->back()
            //->with('info', 'Programa actualizado con éxito');
            ->with('info', ['type' => 'success', 'message' => 'Programa actualizado con éxito']);
    }

    public function destroy(Programa $programa)
    {
        $programa->delete();

        return redirect()->route('programas.index')
            ->with('info', 'Programa eliminado con éxito');
    }
}
