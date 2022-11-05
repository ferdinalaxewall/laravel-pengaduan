<?php

namespace App\Providers;

use App\Repository\AuthInterface;
use App\Repository\Implements\AuthImplements;
use Illuminate\Support\ServiceProvider;

class GlobalProviders extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->authService();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function authService()
    {
        return $this->app->bind(
            AuthInterface::class,
            AuthImplements::class
        );
    }
}
