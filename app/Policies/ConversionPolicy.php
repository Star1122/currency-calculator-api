<?php

namespace App\Policies;

use App\Models\Conversion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConversionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Conversion $conversion
     * @return mixed
     */
    public function view(User $user, Conversion $conversion): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Conversion $conversion
     * @return mixed
     */
    public function update(User $user, Conversion $conversion): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Conversion $conversion
     * @return mixed
     */
    public function delete(User $user, Conversion $conversion): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Conversion $conversion
     * @return mixed
     */
    public function restore(User $user, Conversion $conversion): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Conversion $conversion
     * @return mixed
     */
    public function forceDelete(User $user, Conversion $conversion): bool
    {
        return false;
    }
}
