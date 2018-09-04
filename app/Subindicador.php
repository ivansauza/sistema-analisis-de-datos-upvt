<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subindicador extends Model
{
	protected $table    = 'subindicadores';
	protected $fillable = [
		'nombre', 'procedimiento', 'valor_meta', 'nota', 'indicador_id', 'programa_id'
    ];

	public function indicador()
	{
		return $this->belongsTo('App\Indicador');
	}

    public function programa()
    {
    	return $this->hasMany('App\Programa');
    }
}
