<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
       // Entreprise::class=>EntreprisePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('is-admin', function(User $user){
           return $user->isAdmin();

        });

        Gate::define('is-not-admin', function(User $user){

            return $user->isNotAdmin();


        });

        Gate::define('est-etranger', function(User $user){

            return $user->estEtranger();
        });

      
    }
}
