<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
	protected $table    = 'indicadores';
	protected $fillable = [
		'nombre', 'nota', 'proceso_id'
    ];

	public function proceso()
	{
		return $this->belongsTo('App\Proceso');
	}

    public function subindicadores()
    {
    	return $this->hasMany('App\Subindicador');
    }
}
