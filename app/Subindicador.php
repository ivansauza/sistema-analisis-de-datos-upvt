<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subindicador extends Model
{
	protected $table    = 'subindicadores';

	protected $fillable = [
		'nombre', 'procedimiento', 'valor_meta', 'nota', 'indicador_id', 'programa_id'
	];
	
	public $casts = [
		'procedimiento' => 'array'
	];

	public function indicador()
	{
		return $this->belongsTo('App\Indicador');
	}

    public function programa()
    {
    	return $this->hasMany('App\Programa');
	}
	
	public function calculateProcedimiento($periodo_id)
	{
		$operation = [];

		/* Comprobar si el periodo tiene encuestas */
		if(Encuesta::where('periodo_id', '=', $periodo_id)->get()->isEmpty())
		{
			return 'Vacio';
		}

		if($this->procedimiento)
		{
			foreach($this->procedimiento as $procedimiento)
			{
				switch ($procedimiento['type']) 
				{
					case 'pregunta':
						$encuestas = Encuesta::where('periodo_id', '=', $periodo_id)
							->get();

						$tolerance = 0;
						$total     = 0;

						foreach ($encuestas as $key => $encuesta) 
						{
							$pregunta = $encuesta->preguntas
								->find($procedimiento['value']);

							if($pregunta)
							{
								$tolerance ++;
								$total += $pregunta->pivot->valor;
							}else {
								//$operation[] = null;
							}
						}

						$operation[] = $total;

						if($tolerance == 0)
						{
							return 'Faltan datos';
						}
						break;
					case 'numero':
						$operation[] = $procedimiento['value'];
						break;
					case 'operacion':
						$operation[] = $procedimiento['value'];
						break;
					
					default:
						return 'Error';
						break;
				}
			}
		}
		
		return eval('return '.implode('', $operation).';');
	}
}
