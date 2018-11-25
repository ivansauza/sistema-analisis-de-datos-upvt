<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PreguntaRequest;

use App\Pregunta;
use App\Programa;
use Caffeinated\Shinobi\Models\Role;

class PreguntaController extends Controller
{
    public function __construct()
    {
        /**
         * Asignando permisos a los métodos
         */
        $this->middleware('permission:preguntas.index')
            ->only(['index', 'posicionUpdate']);

        $this->middleware('permission:preguntas.create')
            ->only(['create', 'store']);

        $this->middleware('permission:preguntas.show')
            ->only('show');

        $this->middleware('permission:preguntas.edit')
            ->only(['edit', 'update']);

        $this->middleware('permission:preguntas.destroy')
            ->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $preguntas = Pregunta::withTrashed()
            ->get()
            ->sortBy('posicion');

        $preguntasWithouthTrashed = Pregunta::get();

        return view('pregunta/index', compact('preguntas', 'preguntasWithouthTrashed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        $roles = Role::get()->pluck('name', 'id');

        return view('pregunta.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PreguntaRequest  $request
     * @return mixed
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
     * @return mixed
     */
    public function show(Pregunta $pregunta)
    {
        $this->authorize('access', $pregunta);

        return view('pregunta.show', compact('pregunta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return mixed
     */
    public function edit(Pregunta $pregunta)
    {
        $this->authorize('access', $pregunta);
        $roles = Role::get()->pluck('name', 'id');

        return view('pregunta.edit', compact('pregunta', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PreguntaRequest  $request
     * @param  \App\Pregunta  $pregunta
     * @return mixed
     */
    public function update(PreguntaRequest $request, Pregunta $pregunta)
    {
        $this->authorize('access', $pregunta);
        $pregunta->update($request->all());

        return redirect()->back()
            ->with('info', ['type' => 'success', 'message' => 'Pregunta actualizada con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pregunta  $pregunta
     * @return mixed
     */
    public function destroy(Pregunta $pregunta)
    {
        $this->authorize('access', $pregunta);

        $message = null;

        if ($pregunta->encuestas()->exists()) {
            $pregunta->delete();
            $message = ['type' => 'warning', 'message' => 'Pregunta eliminada con éxito'];

        } else {
            $pregunta->forceDelete();
            $message = ['type' => 'danger', 'message' => 'Pregunta destruida con éxito'];
        }

        return redirect()->route('preguntas.index')
            ->with('info', $message);
    }

    /**
     * Restaurar the specified resource from storage.
     *
     * @return mixed
     */
    public function restore($id)
    {
        $pregunta = Pregunta::withTrashed()->findOrFail($id);
        //$this->authorize('restore', $pregunta);
        $pregunta->restore();

        return redirect()->route('preguntas.index')
            ->with('info', ['type' => 'success', 'message' => 'Pregunta restaurada con éxito']);
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
            'items.*' => 'integer|exists:preguntas,id'
        ]);
        
        foreach ($data['items'] as $key => $item) 
        {
            $pregunta = Pregunta::find($item);
            $this->authorize('access', $pregunta);
            $pregunta->posicion = $key + 1;
            $pregunta->save();
        }

        return ['status' => true];
    }
}
