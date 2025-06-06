<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        // Use Bootstrap for pagination
        Paginator::useBootstrap();

        // Uncomment the line below to use Bootstrap 5 for pagination
        // Paginator::useBootstrapFive();

        // Uncomment the line below to use Tailwind CSS for pagination
        // Paginator::useTailwind();
    }
}
