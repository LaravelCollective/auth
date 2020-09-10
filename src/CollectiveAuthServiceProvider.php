<?php

namespace Collective\Auth;

use Collective\Auth\AuthCommand;
use Collective\Auth\AuthRouteMethods;
use Illuminate\Support\Facades\Route;
use Collective\Auth\ControllersCommand;
use Illuminate\Support\ServiceProvider;

class CollectiveAuthServiceProvider extends ServiceProvider
{
    /**
     * Register the package services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                AuthCommand::class,
                ControllersCommand::class,
            ]);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::mixin(new AuthRouteMethods);
    }
}
