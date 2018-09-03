<?php

namespace App\Http\Controllers;

use App\Subindicador;
use Illuminate\Http\Request;

class SubindicadorController extends Controller
{
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
        return view('subindicador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('subindicador.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subindicador  $subindicador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subindicador $subindicador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subindicador  $subindicador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subindicador $subindicador)
    {
        //
    }

    public function select()
    {
        return view('subindicador.select');
    }
}
