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
        'name', 'apellidos', 'email', 'password', 'disabled'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
     'password', 'remember_token', 
    ];

    protected $casts = [ 
        'disabled' => 'boolean'
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

    public function encuestas()
    {
        return $this->hasMany('App\Encuesta');
    }

    public function roles()
    {
        return $this->belongsToMany('Caffeinated\Shinobi\Models\Role');
    }

    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->apellidos}";
    }

    public function setPasswordAttribute($value)
    {
        if ($value) 
        {
            $this->attributes['password'] = bcrypt($value);
        }
    }

    public static function getProgramas()
    {
        return auth()->user()->programas()->get();
    }
}
