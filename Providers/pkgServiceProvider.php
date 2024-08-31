<?php

namespace Neazk\LoginPkg;

use Illuminate\Support\ServiceProvider;

class pkgServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'package_name');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'package_name');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'package_name');

        // Register the main class to use with the facade
        $this->app->singleton('package_name', function () {
            return new pkgServiceProvider;
        });
    }
}
