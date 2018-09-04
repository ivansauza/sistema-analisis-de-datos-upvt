<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
	protected $table    = 'procesos';
	protected $fillable = [
		'nombre', 'nota'
    ];

    public function indicadores()
    {
    	return $this->hasMany('App\Indicador');
    }
}
