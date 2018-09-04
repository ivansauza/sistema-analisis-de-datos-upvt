<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table    = 'encuestas';
    protected $fillable = [
        'finalizado', 'nota', 'usuario_id', 'periodo_id', 'programa_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function periodo()
    {
    	return $this->belongsTo('App\Periodo');
    }

    public function programa()
    {
    	return $this->belongsTo('App\Programa');
    }

    public function preguntas()
    {
    	return $this->belongsToMany('App\Pregunta');
    }

}
