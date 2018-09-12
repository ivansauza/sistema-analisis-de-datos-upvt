<?php

namespace App\Http\Controllers;

use App\Subindicador;
use Illuminate\Http\Request;
use App\Traits\ProgramasEmptyValidate;
use App\Http\Requests\SubindicadorRequest;

use App\Indicador;
use App\Programa;

class SubindicadorController extends Controller
{
    use ProgramasEmptyValidate;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subindicador.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicadores = Indicador::get()->pluck('nombre', 'id');
        $preguntas   = Programa::getPredeterminado()->preguntas
            ->pluck('nombre', 'id');

        return view('subindicador.create', compact('indicadores', 'preguntas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request\SubindicadorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubindicadorRequest $request)
    {
        $subindicador = new Subindicador($request->all());
        $subindicador->procedimiento = $this->generateProcedimientoJSON($request);
        $subindicador->save();

        return redirect()->route('subindicadores.edit', $subindicador->id)
            ->with('info', ['type' => 'success', 'message' => 'Subindicador guardado con éxito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subindicador  $subindicador
     * @return \Illuminate\Http\Response
     */
    public function show(Subindicador $subindicador)
    {
        return view('subindicador.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subindicador  $subindicador
     * @return \Illuminate\Http\Response
     */
    public function edit(Subindicador $subindicador)
    {
        $indicadores = Indicador::get()->pluck('nombre', 'id');
        $preguntas   = Programa::getPredeterminado()->preguntas
            ->pluck('nombre', 'id');
        $procedimiento = json_decode($subindicador->procedimiento, true);
        
        return view('subindicador.edit', compact(
            'subindicador', 
            'indicadores', 
            'preguntas', 
            'procedimiento'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subindicador  $subindicador
     * @return \Illuminate\Http\Response
     */
    public function update(SubindicadorRequest $request, Subindicador $subindicador)
    {
        $subindicador->fill($request->all());
        $subindicador->procedimiento = $this->generateProcedimientoJSON($request);
        $subindicador->save();

        return redirect()->route('subindicadores.edit', $subindicador->id)
            ->with('info', ['type' => 'success', 'message' => 'Subindicador editado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subindicador  $subindicador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subindicador $subindicador)
    {
        $subindicador->delete();

        return redirect()->route('procesos.index')
            ->with('info', ['type' => 'success', 'message' => 'Subindicador eliminado con éxito']);
    }

    public function select()
    {
        return view('subindicador.select');
    }

    public function generateProcedimientoJSON($request)
    {
        $json = collect();

        if ($request->get('procedimiento_types')) {
            foreach ($request->get('procedimiento_types') as $key => $type) {
                $json->push([
                    'type'  => $type, 
                    'value' => $request->get('procedimiento_values')[$key]
                ]);
            }
        }

        return $json->toJson();
    }
}
