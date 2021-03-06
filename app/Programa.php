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

    public function procesos()
    {
    	return $this->hasMany('App\Proceso');
    }

    public function periodos()
    {
    	return $this->hasMany('App\Periodo');
    }

    /**
     * Retornar el programa predeterminado del usuario logeado 
     *
    */
    public static function getPredeterminado()
    {
        return auth()->user()
            ->programas()
            ->where('predeterminado', '=', 1)
            ->first();
    }
}
