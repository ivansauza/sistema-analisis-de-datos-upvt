<?php

namespace App\Policies;

use App\User;
use App\Programa;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can access the programa.
     * Determinar que no se edite un Administrador y que
     * el usuario que se esta editando pertenezca al
     * programa predeterminado del usuario actualmente
     * logeado.
     *
     * @param  \App\User  $user
     * @param  \App\Pregunta  $programa
     * @return mixed
     */
    public function access(User $user, User $current_user)
    {
        if($current_user->admin) return false;

        $actualUserProgramaDefaultId = $user
            ->programas()
            ->where('predeterminado', '=', 1)
            ->first()
            ->id;


        return $current_user->programas
            ->find($actualUserProgramaDefaultId) ? true : false;
    }
}
