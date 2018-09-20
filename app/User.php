<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Caffeinated\Shinobi\Traits\ShinobiTrait;

class User extends Authenticatable
{
    use Notifiable;
    use ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prefijo', 'name', 'apellidos', 'email', 'username', 'password', 'disabled'
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
        'disabled' => 'boolean', 
        'admin'    => 'boolean'
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

    public function getFullNameAndRoleAttribute()
    {
        return "{$this->roles->first()->name} - {$this->name} {$this->apellidos}";
    }

    public function setPasswordAttribute($value)
    {
        if ($value) 
        {
            $this->attributes['password'] = bcrypt($value);
        }
    }
    
    /**
     * Retorna una coleccion de programas del usuario
     * actualmente logeado.
     * 
     * @return App\Programa
     */
    public static function getProgramas()
    {
        return auth()->user()->programas()->get();
    }

    /**
     * Retorna un arreglo el cual contiene una colección de id's de
     * los periodos de los cuales ya se ha creado la encuesta correspondiente.
     * 
     * @return Array
     */
    public function getEncuestasExistsPeriodos()
    {
        $array_periodos_exists = collect();

        $this->encuestas()->each(function($encuesta, $key) use($array_periodos_exists)
        {
            if ($encuesta->periodo->programa_id == Programa::getPredeterminado()->id) 
            {
                $array_periodos_exists->push($encuesta->periodo->id);
            }
        });

        return $array_periodos_exists->all();
    }
}
