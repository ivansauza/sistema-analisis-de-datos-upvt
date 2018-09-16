<?php

namespace App\Http\Controllers;

use App\Pregunta;
use Illuminate\Http\Request;
use App\Traits\ProgramasEmptyValidate;
use App\Http\Requests\PreguntaRequest;

use App\Programa;
use Caffeinated\Shinobi\Models\Role;

class PreguntaController extends Controller
{
    use ProgramasEmptyValidate;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Programa::getPredeterminado()
            ->preguntas
            ->sortBy('posicion');

        return view('pregunta.index', compact('preguntas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get()->pluck('name', 'id');

        return view('pregunta.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreguntaRequest $request)
    {
        $pregunta = Pregunta::create($request->all());

        return redirect()->route('preguntas.edit', $pregunta->id)
            ->with('info', ['type' => 'success', 'message' => 'Pregunta agregada con éxito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $pregunta)
    {
        return view('pregunta.show', compact('pregunta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(Pregunta $pregunta)
    {
        $programas = auth()->user()->programas
            ->pluck('nombre', 'id');
        $roles     = Role::get()->pluck('name', 'id');

        return view('pregunta.edit', compact('pregunta', 'programas', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(PreguntaRequest $request, Pregunta $pregunta)
    {
        $pregunta->update($request->all());

        return redirect()->back()
            ->with('info', ['type' => 'success', 'message' => 'Pregunta actualizada con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pregunta $pregunta)
    {
        /* Comprobar que el usuario tiene permisos sobre la  enviada */
        Programa::getPredeterminado()->preguntas()
            ->findOrFail($pregunta->id);

        $pregunta->delete();

        return redirect()->route('preguntas.index')
            ->with('info', ['type' => 'success', 'message' => 'Pregunta eliminada con éxito']);
    }

    public function programaSelect()
    {
        return view('pregunta.programa.select');
    }

    public function posicionUpdate(Request $request)
    {
        $data = $request->validate([
            'items'   => 'array|distinct', 
            'items.*' => 'integer|exists:preguntas,id'
        ]);
        
        foreach ($data['items'] as $key => $item) 
        {
            $pregunta = Pregunta::findOrFail($item);
            $pregunta->posicion = $key;
            $pregunta->save();
        }

        return ['status' => true];
    }
}
