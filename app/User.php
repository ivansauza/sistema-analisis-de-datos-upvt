<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function actividades()
    {
        return $this->belongsToMany('App\Actividad');
    }

    public function programas()
    {
        return $this->belongsToMany('App\Programa')
            ->withPivot('predeterminado');
    }

    public static function getProgramas()
    {
        return auth()->user()->programas()->get();
    }
}
