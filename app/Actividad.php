<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actividad extends Model
{
	use SoftDeletes;

	protected $table   = 'actividades';

	public $timestamps = true;

    protected $guarded = [
        'id',
	];
	
	protected $dates = [
        'created_at', 'updated_at', 'deleted_at',
	];
	
	protected $fillable = [
		'ruta', 'url', 'ip', 'agente', 'metodo', 'lugar', 'user_id'
	];

    protected $casts = [
		'ruta'    => 'string',
		'url'     => 'url',
		'ip'      => 'ipAddress',
		'agente'  => 'string',
		'metodo'  => 'string',
		'lugar'   => 'string',
        'user_id' => 'integer',
	];
	
	
}
