<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Programa;
use App\Http\Requests\ProgramaRequest;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = auth()->user()->programas;

        return view('programa/index', compact('programas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programa $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        return view('programa/show', compact('programa'));
    }

    /**
     * Seleccionar un programa por defecto.
     *
     * @param  \App\Programa $programa
     * @return \Illuminate\Http\Response
     */
    public function predetermined(Programa $programa)
    {
        /* Comprobar que el usuario tiene permisos sobre el programa enviado */
        auth()->user()->programas()->findOrFail($programa->id);

        foreach (auth()->user()->programas as $key => $value) 
        {
            $pivot = $value->pivot;
            $pivot->predeterminado = $programa->id == $value->id ? 1 : 0;
            
            $pivot->save();
        }

        return redirect()->back()
           ->with('info', ['type' => 'success', 'message' => 'Programa Educativo selecionado con éxito']);;
    }
}
