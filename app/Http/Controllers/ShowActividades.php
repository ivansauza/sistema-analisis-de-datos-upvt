<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowActividades extends Controller
{
    public function __invoke()
    {
    	return view('actividad.show');
    }
}
