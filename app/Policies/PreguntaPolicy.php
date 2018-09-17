<?php

namespace App\Policies;

use App\User;
use App\Pregunta;
use Illuminate\Auth\Access\HandlesAuthorization;

class PreguntaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can access the pregunta.
     * cuando el programa predeterminado del usuario sea igual al enviado
     *
     * @param  \App\User  $user
     * @param  \App\Pregunta  $pregunta
     * @return mixed
     */
    public function access(User $user, Pregunta $pregunta)
    {
        return $user->programas()->where('predeterminado', '=', 1)->first()->id == $pregunta->programa_id;
    }
}
