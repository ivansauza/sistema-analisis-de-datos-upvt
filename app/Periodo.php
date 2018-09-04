<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
	protected $table    = 'periodos';
	protected $fillable = [
		'clave', 'anio', 'estado', 'actual'
    ];

    public function encuestas()
    {
    	return $this->hasMany('App\Encuesta');
    }
}
