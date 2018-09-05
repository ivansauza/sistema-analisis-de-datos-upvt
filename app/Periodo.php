<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
	protected $table    = 'periodos';
	protected $fillable = [
		'clave', 'anio', 'estado', 'actual'
    ];
    protected $casts = [ 
    	'estado' => 'boolean', 
    	'actual' => 'boolean' 
    ];

    public function encuestas()
    {
    	return $this->hasMany('App\Encuesta');
    }
}
