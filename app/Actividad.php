<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
	protected $table    = 'actividades';
	protected $fillable = [
		'clave', 'nombre'
    ];
	
    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}
