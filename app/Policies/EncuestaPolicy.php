<?php

namespace App\Policies;

use App\User;
use App\Encuesta;
use Illuminate\Auth\Access\HandlesAuthorization;

class EncuestaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the encuesta.
     *
     * @param  \App\User  $user
     * @param  \App\Encuesta  $encuesta
     * @return mixed
     */
    public function view(User $user, Encuesta $encuesta)
    {
        //
    }

    /**
     * Determine whether the user can create encuestas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the encuesta.
     *
     * @param  \App\User  $user
     * @param  \App\Encuesta  $encuesta
     * @return mixed
     */
    public function update(User $user, Encuesta $encuesta)
    {
        //
    }

    /**
     * Determine whether the user can delete the encuesta.
     *
     * @param  \App\User  $user
     * @param  \App\Encuesta  $encuesta
     * @return mixed
     */
    public function delete(User $user, Encuesta $encuesta)
    {
        //
    }
}
