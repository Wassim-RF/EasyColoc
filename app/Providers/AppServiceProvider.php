<?php

namespace App\Providers;

use App\Models\Colocations;
use App\Policies\ColocationPolicy;
use Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(class: Colocations::class, policy : ColocationPolicy::class);
    }
}
