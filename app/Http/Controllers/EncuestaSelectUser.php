<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Programa;

class EncuestaSelectUser extends Controller
{
    public function __invoke()
    {
		$users = Programa::getPredeterminado()
			->users
            ->where('disabled', '==', 0)
            ->where('id', '!=', auth()->id())
            ->pluck('full_name_and_role', 'id');

        return view('encuesta.select.user', compact('users'));
    }
}
