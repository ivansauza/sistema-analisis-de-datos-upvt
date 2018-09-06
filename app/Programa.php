<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table    = 'programas';
    protected $fillable = [
        'clave', 'nombre', 'predeterminado'
    ];

    public function users()
    {
    	return $this->belongsToMany('App\User')
            ->withPivot('predeterminado');
    }

    public function preguntas()
    {
    	return $this->hasMany('App\Pregunta');
    }

    public function subindicadores()
    {
    	return $this->hasMany('App\Subindicador');
    }

    public function periodos()
    {
    	return $this->hasMany('App\Periodo');
    }
}
