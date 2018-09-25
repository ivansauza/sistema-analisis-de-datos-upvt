<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periodo extends Model
{
    use SoftDeletes;

    protected $table    = 'periodos';
    
	protected $fillable = [
		'clave', 'anio', 'estado', 'actual', 'programa_id'
    ];

    protected $casts = [ 
    	'estado' => 'boolean', 
    	'actual' => 'boolean' 
    ];

    protected $dates = [
        'deleted_at'
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

    public function getTinyClaveAttribute()
    {
        $clave = explode('-', $this->clave);
        
        return strtoupper($clave[0][0]) . strtoupper($clave[1][0]) . " {$this->anio}";
    }
}
