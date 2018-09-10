<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table    = 'encuestas';

    protected $fillable = [
        'finalizado', 'nota', 'user_id', 'periodo_id'
    ];

    protected $casts = [
        'finalizado' => 'boolean'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function periodo()
    {
    	return $this->belongsTo('App\Periodo');
    }

    public function preguntas()
    {
    	return $this->belongsToMany('App\Pregunta')
            ->withPivot('valor');
    }

}
