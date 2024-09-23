<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bind the UserService to the service container
        $this->app->singleton('user-service', function ($app) {
            return new UserService();
        });
    }

    public function boot()
    {
        //
    }
}
