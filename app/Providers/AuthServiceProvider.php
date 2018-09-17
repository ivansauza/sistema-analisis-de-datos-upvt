<?php

namespace App\Providers;

use App\Periodo;
use App\Policies\PeriodoPolicy;

use App\Pregunta;
use App\Policies\PreguntaPolicy;

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
        
        Periodo::class => PeriodoPolicy::class,
        Pregunta::class => PreguntaPolicy::class,
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
