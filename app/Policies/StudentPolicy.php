<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Student;
use App\User;

class StudentPolicy extends AdminPolicy
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

    public function show(User $user)
    {
        return $user->role === 'director';
    }

    public function edit(User $user)
    {
        return $user->role === 'director';
    }

    //solo el director que lo inscribió lo puede actualizar
    public function update(User $user, Student $student)
    {
        return $user->role === 'director' && $student->inscriptions->last()->school_id === $user->school_id;
    }

    public function index(User $user)
    {
        return $user->role === 'admin';
    }
}
