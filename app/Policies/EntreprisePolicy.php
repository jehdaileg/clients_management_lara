<?php

namespace App\Policies;

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EntreprisePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    /*
    public function before(User $user, $ability)
    {
        if($user->estAdmin())
        {
            return true;
        }
    }*/

    public function viewAny(User $user)
    {
        //

        return true;

    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Entreprise  $entreprise
     * @return mixed
     */
    public function view(User $user, Entreprise $entreprise)
    {
        //

        return true;

        
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
       // return $user->NestAdmin();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Entreprise  $entreprise
     * @return mixed
     */
    public function update(User $user, Entreprise $entreprise)
    {
        //
        //return $user->id == $entreprise->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Entreprise  $entreprise
     * @return mixed
     */
    public function delete(User $user, Entreprise $entreprise)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Entreprise  $entreprise
     * @return mixed
     */
    public function restore(User $user, Entreprise $entreprise)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Entreprise  $entreprise
     * @return mixed
     */
    public function forceDelete(User $user, Entreprise $entreprise)
    {
        //
    }
}
