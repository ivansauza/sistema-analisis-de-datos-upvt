<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadisticaController extends Controller
{
    public function select()
    {
        return view('estadistica.select');
    }

    public function show()
    {
        return view('estadistica.show');
    }

    public function graph()
    {
    	return view('estadistica.graph');
    }
}
