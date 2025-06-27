<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Bind the BaseRepositoryInterface to the BaseRepository
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
