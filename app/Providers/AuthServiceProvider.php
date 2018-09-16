<?php

namespace App\Providers;

use App\Periodo;
use App\Policies\PeriodoPolicy;

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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /*Gate::define('access-periodo', function ($user, $periodo) {
            return $user->programas()->where('predeterminado', '=', 1)->first()->id == $periodo->programa_id;
        });*/
    }
}
