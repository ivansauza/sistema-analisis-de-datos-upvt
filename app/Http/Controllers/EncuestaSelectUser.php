<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ProgramasEmptyValidate;

use App\Programa;

class EncuestaSelectUser extends Controller
{
    use ProgramasEmptyValidate;

    public function __construct()
    {
        /**
         * Revisar si el usuario actual tiene un programa
         * predeterminado, si no, redireccionar a programas.index
         */
        $this->checkIssetDefaultPrograma();
    }

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
