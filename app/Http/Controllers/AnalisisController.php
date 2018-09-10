<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ProgramasEmptyValidate;
use App\Http\Requests\AnalisisRequest;

use App\Analisis;
use App\Programa;
use App\Periodo;
use App\Encuesta;


class AnalisisController extends Controller
{
    use ProgramasEmptyValidate;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analisis = auth()->user()->encuestas;

        return view('analisis.index', compact('analisis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodo = Periodo::where('estado', '=', 1)
            ->findOrFail(request()->input('periodo_id'));
        
        $preguntas = Programa::getPredeterminado()
            ->preguntas()
            ->get()
            ->where('desactivar', '=', 0)
            ->where('role_id', '=', auth()->user()->roles()->first()->id);

        return view('analisis.create', compact('preguntas', 'periodo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnalisisRequest $request)
    {
        $encuesta = new Encuesta($request->all());
        $encuesta->user_id = auth()->id();
        $encuesta->save();

        foreach ($request->get('preguntas_id') as $key => $pregunta_id) 
        {
            $encuesta->preguntas()->attach($pregunta_id, [
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
        return view('analisis.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $analisis  = Encuesta::where('user_id', '=', auth()->id())
            ->findOrFail($id);
        $preguntas = $analisis->preguntas;

        return view('analisis.edit', compact('analisis', 'preguntas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $analisis  = Encuesta::findOrFail($id);
        $analisis->preguntas()->sync([]);
        $analisis->delete();

        return redirect()->route('analisis.index')
            ->with('info', ['type' => 'success', 'message' => 'Análisis eliminado con éxito']);
    }

    public function select()
    {
        $periodos = Periodo::get()->where('estado', '=', 1)
            ->where('programa_id', '=', Programa::getPredeterminado()->id)
            ->pluck('full_clave', 'id');

        return view('analisis.select', compact('periodos'));
    }
}
