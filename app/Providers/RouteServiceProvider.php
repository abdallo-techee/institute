<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{


        /**
     * The path to the "home" route for your application.
     *
     * This is used after user authentication or registration.
     */
    public const HOME = '/'; // 👈 or '/' or any route you want


    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
