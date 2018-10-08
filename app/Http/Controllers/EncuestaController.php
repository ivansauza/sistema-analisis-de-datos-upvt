<?php

namespace App\Http\Controllers;

use App\Encuesta;
use Illuminate\Http\Request;

use App\Http\Requests\EncuestaCreateRequest;
use App\Http\Requests\EncuestaStoreRequest;
use App\Http\Requests\EncuestaUpdateRequest;

Use App\Programa;
use App\User;
use App\Periodo;

class EncuestaController extends Controller
{
    public function __construct()
    {
        /**
         * Asignando permisos a los métodos
         */
        $this->middleware('permission:encuestas.index')
            ->only('index');

        $this->middleware('permission:encuestas.create')
            ->only(['create', 'store']);

        $this->middleware('permission:encuestas.show')
            ->only('show');

        $this->middleware('permission:encuestas.edit')
            ->only(['edit', 'update']);

        $this->middleware('permission:encuestas.destroy')
            ->only('destroy');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestas = Encuesta::whereHas('periodo', function ($query) {
            $query->where('programa_id', '=', Programa::getPredeterminado()->id);
            $query->whereIn('user_id', User::get()->pluck('id'));
        })->get();

        return view('encuesta.index', compact('encuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(EncuestaCreateRequest $request)
    {
        $user      = User::find($request->get('user_id'));
        $periodo   = Periodo::find($request->get('periodo_id'));
        $preguntas = Programa::getPredeterminado()
            ->preguntas
            ->where('desactivar', '=', 0)
            ->where('role_id', '=', $user->roles()->first()->id);

        return view('encuesta.create', compact('user', 'periodo', 'preguntas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EncuestaStoreRequest $request)
    {
        $encuesta = new Encuesta($request->all());
        $encuesta->user_id    = $request->get('user_id');
        $encuesta->periodo_id = $request->get('periodo_id');
        $encuesta->save();

        /**
         * Insertar todas las preguntas y sus valores en la tabla
         * encuesta_pregunta
         */
        foreach ($request->get('preguntas_id') as $key => $pregunta_id) 
        {
            $encuesta->preguntas()->attach($pregunta_id, [
                'valor' => $request->get('preguntas_value')[$key]
            ]);
        }

        return redirect()->route('encuestas.index')
            ->with('info', ['type' => 'success', 'message' => 'Encuesta guardado con éxito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encuesta = Encuesta::whereHas('periodo', function ($query) {
            $query->where('programa_id', '=', Programa::getPredeterminado()->id);
        })
        ->findOrFail($id);

        return view('encuesta.show', compact('encuesta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encuesta = Encuesta::whereHas('periodo', function ($query) {
            $query->where('programa_id', '=', Programa::getPredeterminado()->id);
        })
        ->findOrFail($id);
        
        return view('encuesta.edit', compact('encuesta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function update(EncuestaUpdateRequest $request, Encuesta $encuesta)
    {
        $encuesta->update($request->all());

        /**
         * Actualizar todas las preguntas y sus valores en la tabla
         * encuesta_pregunta
         */
        foreach ($encuesta->preguntas as $key => $pregunta) 
        {
            $pivot = $pregunta->pivot;

            if($pivot->pregunta_id == $request->get('preguntas_id')[$key])
            {
                $pivot->valor = $request->get('preguntas_value')[$key];
                $pivot->save();
            }
        }
        
        return redirect()->route('encuestas.edit', $encuesta->id)
            ->with('info', ['type' => 'success', 'message' => 'Encuesta actualizado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encuesta = Encuesta::whereHas('periodo', function ($query) {
            $query->where('programa_id', '=', Programa::getPredeterminado()->id);
        })
        ->findOrFail($id);

        $encuesta->preguntas()->sync([]);
        $encuesta->delete();

        return redirect()->route('encuestas.index')
            ->with('info', ['type' => 'success', 'message' => 'Encuesta eliminada con éxito']);
    }
}
