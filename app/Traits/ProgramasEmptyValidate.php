<?php
namespace App\Traits;

trait ProgramasEmptyValidate
{
	public function checkIssetDefaultPrograma()
	{
		$this->middleware(function ($request, $next) 
		{
			if( ! auth()->user()->programas()->where('predeterminado', '=', 1)->first() ) {
				return redirect()->route('programas.index')
					->with('info', ['type' => 'danger', 'message' => 'Seleccione un Programa Educativo como predeterminado.']);
			}

			return $next($request);
		});
	}
}