<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\User;
use App\School;

class SchoolPolicy extends AdminPolicy
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

    public function edit(User $user, School $school)
    {
        return $user->school_id === $school->id  && $user->role === 'director' || $user->role === 'admin';
    }

   
    /*public function manage(User $user)
    {
        return $user->role === 'admin';
    }*/
}
