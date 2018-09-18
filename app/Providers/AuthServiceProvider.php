<?php

namespace App\Providers;

use App\Encuesta;
use App\Policies\EncuestaPolicy;

use App\Periodo;
use App\Policies\PeriodoPolicy;

use App\Pregunta;
use App\Policies\PreguntaPolicy;

use App\User;
use App\Policies\UserPolicy;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        
        Encuesta::class => EncuestaPolicy::class,
        Periodo::class  => PeriodoPolicy::class,
        Pregunta::class => PreguntaPolicy::class,
        User::class     => UserPolicy::class,
        
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
    }
}
