<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
	protected $table    = 'periodos';
	protected $fillable = [
		'clave', 'anio', 'estado', 'actual', 'programa_id'
    ];
    protected $casts = [ 
    	'estado' => 'boolean', 
    	'actual' => 'boolean' 
    ];

    public function encuestas()
    {
    	return $this->hasMany('App\Encuesta');
    }

    public function programa()
    {
        return $this->belongsTo('App\Programa');
    }

    public function getFullClaveAttribute()
    {
        $clave = explode('-', $this->clave);
        $res   = ucwords(implode(' ', $clave));
        
        return  str_replace(' ', '-', $res) . " {$this->anio}";
    }
}
