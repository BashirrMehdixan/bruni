<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
    }

    public function viewAny(User $user): bool
    {
        return $user->role_id == 0 || $user->role_id == 1;

    }

    public function view(User $user, User $model): bool
    {
        if ($user->role_id == 0) {
            return true;
        } elseif ($user->role_id == 1) {
            return $model->role_id != 1;
        }
        return false;
    }

    public function create(User $user): bool
    {
        return $user->role_id == 0;
    }

    public function update(User $user, User $model): bool
    {
        if ($user->role_id == 0) {
            return true;
        } elseif ($user->role_id == 1) {
            return $model->role_id == 1;
        }
        return false;
    }

    public function delete(User $user, User $model): bool
    {
        if ($user->role_id == 0) {
            return true;
        } elseif ($user->role_id == 1) {
            return $model->role_id == 1;
        }
        return false;
    }

    public function restore(User $user, User $model): bool
    {
        if ($user->role_id == 0) {
            return true;
        } elseif ($user->role_id == 1) {
            return $model->role_id == 1;
        }
        return false;
    }

    public function forceDelete(User $user, User $model): bool
    {
        if ($user->role_id == 0) {
            return true;
        } elseif ($user->role_id == 1) {
            return $model->role_id == 1;
        }
        return false;
    }
}
