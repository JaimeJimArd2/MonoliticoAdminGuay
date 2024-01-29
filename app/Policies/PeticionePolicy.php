<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Peticione;
use App\Models\User;

class PeticionePolicy
{
    public function before(User $user, string $ability)
    {
        if ($user->role_id == 2) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Peticione $peticione): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Peticione $peticione): bool
    {
        if ($user-> role_id == 1 && $peticione-> user_id = $user-> id) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Peticione $peticione): bool
    {
        if ($user->role_id == 1 && $peticione->user_id = $user->id) {
            return true;
        }
        return false;
    }

    protected $policies = [
        Peticione::class => PeticionePolicy::class,
    ];
}
