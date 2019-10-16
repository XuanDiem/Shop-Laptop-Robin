<?php

namespace App\Providers;

use App\Http\Controllers\RoleConstant;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('crud-users', function ($user, $userId) {
            if ($user->role == RoleConstant::ADMIN) {
                return true;
            }

            if ($user->id == $userId) {
                return true;
            }

            return false;
        });

        Gate::define('crud-products', function ($user) {
            if ($user->role == RoleConstant::ADMIN) {
                return true;
            }
            return false;
        });

        Gate::define('crud-customer', function ($user) {
            if ($user->role == RoleConstant::ADMIN) {
                return true;
            }
            return false;
        });
    }
}
