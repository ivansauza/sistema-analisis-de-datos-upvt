<?php

namespace App\Policies;

use App\User;
use App\Periodo;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeriodoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can access the periodo.
     * cuando el programa predeterminado del usuario sea igual al enviado
     *
     * @param  \App\User  $user
     * @param  \App\Periodo  $periodo
     * @return mixed
     */
    public function access(User $user, Periodo $periodo)
    {
        return $user->programas()->where('predeterminado', '=', 1)->first()->id == $periodo->programa_id;
    }
}
