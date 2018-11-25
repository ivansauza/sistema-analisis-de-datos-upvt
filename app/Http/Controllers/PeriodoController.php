<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\NewPeriod;

use App\Http\Requests\PeriodoRequest;

use App\Programa;
use App\Periodo;
use App\Proceso;

class PeriodoController extends Controller
{
    public function __construct()
    {
        /**
         * Asignando permisos a los métodos
         */
        $this->middleware('permission:periodos.index')
            ->only(['index', 'posicionUpdate']);

        $this->middleware('permission:periodos.create')
            ->only(['create', 'store']);

        $this->middleware('permission:periodos.show')
            ->only('show');

        $this->middleware('permission:periodos.edit')
            ->only(['edit', 'update']);

        $this->middleware('permission:periodos.destroy')
            ->only('destroy');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $periodos = Programa::getPredeterminado()
            ->periodos()
            ->withTrashed()
            ->get()
            ->sortBy('posicion');

        $periodosWithouthTrashed = Programa::getPredeterminado()->periodos;

        return view('periodo/index', compact('periodos', 'periodosWithouthTrashed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periodo/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request\PeriodoRequest  $request
     * @return mixed
     */
    public function store(PeriodoRequest $request)
    {
        $periodo = new Periodo($request->all());
        $periodo->programa_id = Programa::getPredeterminado()->id;
        $periodo->save();

        //Enviar notificaciones a los usuarios
        if ($request->input('notificacion')) {
            $users = Programa::getPredeterminado()
                ->users
                ->where('disabled', '=', 0);

            foreach ($users as $key => $user) {
                $user->notify(new NewPeriod($periodo));
            }
        }

        return redirect()->route('periodos.edit', $periodo->id)
            ->with('info', ['type' => 'success', 'message' => 'Periodo guardado con éxito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periodo  $periodo
     * @return mixed
     */
    public function show(Periodo $periodo)
    {
        $this->authorize('access', $periodo);

        return view('periodo/show', compact('periodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periodo  $periodo
     * @return mixed
     */
    public function edit(Periodo $periodo)
    {
        $this->authorize('access', $periodo);
        
        return view('periodo/edit', compact('periodo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PeriodoRequest  $request
     * @param  integer  $id
     * @return mixed
     */
    public function update(PeriodoRequest $request, $id)
    {
        $periodo = Periodo::findOrFail($id);
        $this->authorize('access', $periodo);
        $periodo->update($request->all());

        return redirect()->back()
            ->with('info', ['type' => 'success', 'message' => 'Periodo actualizado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periodo  $periodo
     * @return mixed
     */
    public function destroy(Periodo $periodo)
    {
        $this->authorize('access', $periodo);

        $message = null;

        if ($periodo->encuestas()->exists()) {
            $periodo->delete();
            $message = ['type' => 'warning', 'message' => 'Periodo eliminado con éxito'];

        } else {
            $periodo->forceDelete();
            $message = ['type' => 'danger', 'message' => 'Periodo destruido con éxito'];
        }

        return redirect()->route('periodos.index')
            ->with('info', $message);
    }

    /**
     * Restaurar the specified resource from storage.
     *
     * @param  \App\Periodo  $periodo
     * @return mixed
     */
    public function restore($id)
    {
        $periodo = Periodo::withTrashed()->findOrFail($id);
        //$this->authorize('restore', $periodo);
        $periodo->restore();

        return redirect()->route('periodos.index')
            ->with('info', ['type' => 'success', 'message' => 'Periodo restaurado con éxito']);
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
            'items'   => 'array', 
            'items.*' => 'integer|exists:periodos,id|distinct'
        ]);
        
        foreach ($data['items'] as $key => $item) 
        {
            $periodo = Periodo::findOrFail($item);
            $this->authorize('access', $periodo);
            $periodo->posicion = $key + 1;
            $periodo->save();
        }

        return ['status' => true];
    }

    public function report($id)
    {
        $periodo  = Periodo::findOrFail($id);
        $procesos = Proceso::get();
        
        return view('periodo.report', compact( 'periodo', 'procesos' ));
    }
}