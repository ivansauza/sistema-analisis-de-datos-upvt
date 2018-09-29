<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AnalisisCreateRequest;
use App\Http\Requests\AnalisisStoreRequest;
use App\Http\Requests\AnalisisUpdateRequest;

use App\Analisis;
use App\Programa;
use App\Periodo;
use App\Encuesta;

class AnalisisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @return App\Encuesta
     */
    public function index()
    {
        $analisis = auth()->user()
            ->encuestas
            ->where('periodo.programa_id', '=', Programa::getPredeterminado()->id);

        return view('analisis.index', compact('analisis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param App\Http\Requests\AnalisisCreateRequest  $request
     * @return \Illuminate\Http\Response
     * @return App\Periodo
     * @return App\Pregunta
     */
    public function create(AnalisisCreateRequest $request)
    {
        $periodo   = Periodo::find($request->get('periodo_id'));
        /**
         * Obtener todas las preguntas del programa predeterminado que
         * se encuentren en estado 0 "Activo", que pertenezcan al rol
         * de usuario actualmente logeado.
         */
        $preguntas = Programa::getPredeterminado()
            ->preguntas
            ->where('desactivar', '=', 0)
            ->where('role_id', '=', auth()->user()->roles()->first()->id)
            ->sortBy('posicion');

        return view('analisis.create', compact('periodo', 'preguntas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AnalisisStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnalisisStoreRequest $request)
    {
        $analisis = new Encuesta($request->all());
        $analisis->user_id = auth()->id();
        $analisis->save();

        /**
         * Insertar todas las preguntas y sus valores en la tabla
         * encuesta_pregunta
         */
        foreach ($request->get('preguntas_id') as $key => $pregunta_id) 
        {
            $analisis->preguntas()->attach($pregunta_id, [
                'valor' => $request->get('preguntas_value')[$key]
            ]);
        }

        return redirect()->route('analisis.index')
            ->with('info', ['type' => 'success', 'message' => 'Análisis guardado con éxito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $analisis = Encuesta::whereHas('periodo', function ($query) {
                $query->where('programa_id', '=', Programa::getPredeterminado()->id);
            } )
            ->where('user_id', '=', auth()->id())
            ->findOrFail($id);
        return view('analisis.show', compact('analisis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $analisis = Encuesta::whereHas('periodo', function ($query) {
            $query->where('programa_id', '=', Programa::getPredeterminado()->id);
            $query->where('estado', '=', 0);
        })
        ->where('user_id', '=', auth()->id())
        ->where('finalizado', '=', 0)
        ->findOrFail($id);
        
        return view('analisis.edit', compact('analisis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\AnalisisUpdateRequest  $request
     * @param  \App\Encuesta int  $analisis
     * @return \Illuminate\Http\Response
     */
    public function update(AnalisisUpdateRequest $request, Encuesta $analisis)
    {
        $analisis->update($request->all());

        /**
         * Actualizar todas las preguntas y sus valores en la tabla
         * encuesta_pregunta
         */
        foreach ($analisis->preguntas as $key => $pregunta) 
        {
            $pivot = $pregunta->pivot;

            if($pivot->pregunta_id == $request->get('preguntas_id')[$key])
            {
                $pivot->valor = $request->get('preguntas_value')[$key];
                $pivot->save();
            }
        }
        
        return redirect()->route('analisis.index')
            ->with('info', ['type' => 'success', 'message' => 'Análisis actualizado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $analisis = Encuesta::whereHas('periodo', function ($query) {
            $query->where('programa_id', '=', Programa::getPredeterminado()->id);
            $query->where('estado', '=', 0);
        })
        ->where('user_id', '=', auth()->id())
        ->where('finalizado', '=', 0)
        ->findOrFail($id);

        $analisis->preguntas()->sync([]);
        $analisis->delete();

        return redirect()->route('analisis.index')
            ->with('info', ['type' => 'success', 'message' => 'Análisis eliminado con éxito']);
    }
}
