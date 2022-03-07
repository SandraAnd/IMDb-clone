<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        //saying the usermodel what the policies want->UserPolicy.php














        // 'App\Models\User' => 'App\Policies\UserPolicy', //activar este comentario

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        /* define a admin user role */
        Gate::define('isAdmin', function($user) {
            return $user->role_id == 1;
         });
        
         /* define a manager user role */
         Gate::define('isRegisteredUser', function($user) {
             return $user->role_id == 2;
         });        
    }
}
