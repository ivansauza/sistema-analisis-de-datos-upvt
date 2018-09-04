<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table    = 'programas';
    protected $fillable = [
        'clave', 'nombre'
    ];

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }

    public function preguntas()
    {
    	return $this->hasMany('App\Pregunta');
    }

    public function subindicadores()
    {
    	return $this->hasMany('App\Subindicador');
    }

    public function encuestas()
    {
    	return $this->hasMany('App\Encuesta');
    }
}
