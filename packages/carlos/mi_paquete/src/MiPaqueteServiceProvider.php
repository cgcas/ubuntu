<?php

namespace Carlos\MiPaquete;

use Illuminate\Support\ServiceProvider;

class MiPaqueteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->app->make('Carlos\MiPaquete\Controllers\MainController');
    }
}