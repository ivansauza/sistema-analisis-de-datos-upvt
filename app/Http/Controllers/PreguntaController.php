<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ProgramasEmptyValidate;

use App\Http\Requests\PreguntaRequest;

use App\Pregunta;
use App\Programa;
use Caffeinated\Shinobi\Models\Role;

class PreguntaController extends Controller
{
    use ProgramasEmptyValidate;

    public function __construct()
    {
        /**
         * Revisar si el usuario actual tiene un programa
         * predeterminado, si no, redireccionar a programas.index
         */
        $this->checkIssetDefaultPrograma();

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
        $preguntas = Programa::getPredeterminado()
            ->preguntas
            ->sortBy('posicion');

        return view('pregunta.index', compact('preguntas'));
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
        $pregunta = new Pregunta($request->all());
        $pregunta->programa_id = Programa::getPredeterminado()->id;
        $pregunta->save();

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
        $pregunta->delete();

        return redirect()->route('preguntas.index')
            ->with('info', ['type' => 'success', 'message' => 'Pregunta eliminada con éxito']);
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
