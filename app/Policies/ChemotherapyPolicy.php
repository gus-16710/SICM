<?php

namespace App\Policies;

use App\Models\User;

class ChemotherapyPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {       
        return true ? true : false;
    }
}
