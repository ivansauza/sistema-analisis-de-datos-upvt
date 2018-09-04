<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table    = 'preguntas';
    protected $fillable = [
        'nombre', 'nota', 'desactivar', 'role_id', 'programa_id'
    ];

    public function encuestas()
    {
    	return $this->belongsToMany('App\Encuesta');
    }

    public function programa()
    {
    	return $this->belongsTo('App\Programa');
    }

    /*
    public function role()
    {
    	return $this->belongsTo('App\Programa');
    }
    */
}
