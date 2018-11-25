<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Pregunta;

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

	public function getProcedimiento()
	{
		$result = [];

		foreach ($this->procedimiento as $item) 
		{
			switch ($item['type']) 
			{
				case 'pregunta':
					$result[] =  Pregunta::find($item['value'])->nombre;
					break;

				case 'numero':
					$result[] =  $item['value'];
					break;
				
				default:
					$result[] =  $item['value'];
					break;
			}
		}

		return implode(' ', $result);
	}
	
	public function calculateProcedimiento($periodo_id)
	{
		$operation = []; // Almacenar la operación que se debe realizar

		/* Comprobar si el estado del periodo esta abierto */
		if ( !Periodo::find( $periodo_id )->estado ) {
			return 'Periodo abierto';
		}

		/* Comprobar si el periodo tiene encuestas */
		if ( Encuesta::where( 'periodo_id', '=', $periodo_id )->get()->isEmpty() ) {
			return 'Vació';
		}

		/* Comprobar si el subindicador tiene el procedimiento vació */
		if ( ! $this->procedimiento ) {
			return 'Sin procedimiento';
		} else {
			foreach ( $this->procedimiento as $procedimiento ) { // Recorriendo el procedimiento
				switch ( $procedimiento['type'] ) 
				{
					case 'pregunta':
						$encuestas = Encuesta::where( 'periodo_id', '=', $periodo_id )->WhereHas('periodo', function ($query) {
							$query->whereIn('user_id', User::get()->pluck('id'));
						})->get();
						$tolerance = 0; // Variable que indicada si no  hay valores
						$total     = 0; // Se guarda el total de todas las encuestas
	
						foreach ( $encuestas as $key => $encuesta ) {
							$pregunta = $encuesta->preguntas
								->find( $procedimiento['value'] );
	
							if ( $pregunta ) {
								$tolerance ++;
								$total += $pregunta->pivot->valor;
							}
						}
	
						$operation[] = $total;
	
						if ( $tolerance == 0 ) return 'Faltan datos';
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
		
		$result = 0;

		try {
			@$result = eval( 'return ' . implode( '', $operation ) . ';' );
		} catch ( \Exception $exception ) {
			return $exception->getCode();
		}

		return $result;
	}
}
