<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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

    public function edit(User $logged_user,User $userToOperateOn)
    {
        return $logged_user->is($userToOperateOn);
    }

    public function follow(User $logged_user,User $userToOperateOn)
    {
        return $logged_user->isNot($userToOperateOn);
    }
}
