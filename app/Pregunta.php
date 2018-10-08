<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pregunta extends Model
{
    use SoftDeletes;

    protected $table    = 'preguntas';

    protected $fillable = [
        'nombre', 'nota', 'desactivar', 'role_id', 'programa_id'
    ];

    protected $casts = [ 
        'desactivar' => 'boolean'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function encuestas()
    {
    	return $this->belongsToMany('App\Encuesta');
    }

    public function programa()
    {
    	return $this->belongsTo('App\Programa');
    }

    public function role()
    {
        return $this->belongsTo('Caffeinated\Shinobi\Models\Role');
    }
}
