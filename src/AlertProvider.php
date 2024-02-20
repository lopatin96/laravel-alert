<?php

namespace Atin\LaravelAlert;

use Illuminate\Support\ServiceProvider;

class AlertProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-alert');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-alert')
        ], 'laravel-alert-views');
    }
}