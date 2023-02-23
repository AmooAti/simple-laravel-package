<?php

namespace Amooati\ECommerce\Providers;

use Illuminate\Support\ServiceProvider;

class ECommerceServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../Routes/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'amooati-ecommerce');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'amooati-ecommerce');
        $this->publishes([
            __DIR__ . '/../../Config/ecommerce.php' => config_path('ecommerce.php')
        ], 'ecommerce configs');


//        if ($this->app->runningInConsole()) {
//
//        }

//        $this->mergeConfigFrom(__DIR__ . '/../../Config/ecommerce.php', 'ecommerce');
    }
}
