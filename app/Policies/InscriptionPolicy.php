<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\User;
use App\Inscription;

class InscriptionPolicy 
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //solo los directores pueden editar una inscripción
    public function edit(User $user, Inscription $inscription)
    {
        return $user->school_id === $inscription->school_id && $user->role === 'director';
    }

    public function create(User $user)
    {
        return $user->role === 'director';
    }

    public function show(User $user)
    {
        return $user->role === 'director' || $user->role === 'admin';
    }
}
