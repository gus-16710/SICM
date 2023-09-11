<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        Gate::define('chemotherapy', function (User $user) {
            return in_array('Quimioterapia', $user->modules()->pluck('Permiso')->toArray());
        });

        Gate::define('parenteral', function (User $user) {
            return in_array('Nutrición Parenteral', $user->modules()->pluck('Permiso')->toArray());
        });

        Gate::define('antibiotic', function (User $user) {
            return in_array('Antibiótico', $user->modules()->pluck('Permiso')->toArray());
        });
    }
}
