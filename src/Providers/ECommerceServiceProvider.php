<?php

namespace Amooati\ECommerce\Providers;

use Amooati\ECommerce\Console\Commands\EcommerceCommand;
use Illuminate\Support\ServiceProvider;

class ECommerceServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../../Routes/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'amooati-ecommerce');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'amooati-ecommerce');

        // publish you own config
        $this->publishes([
            __DIR__ . '/../../Config/ecommerce.php' => config_path('ecommerce.php')
        ], 'ecommerce configs');

        // Use below line if you want to merge your desired config into another packages config
        $this->mergeConfigFrom(__DIR__ . '/../../Config/ecommerce.php', 'ecommerce');
    }

    public function register(): void
    {
        // Register your console commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                EcommerceCommand::class
            ]);
        }
    }
}
