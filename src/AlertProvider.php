<?php

namespace Atin\LaravelAlert;

use Illuminate\Support\ServiceProvider;
use Atin\LaravelBreadcrumbs\View\Components\Breadcrumbs;

class AlertProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-alert');
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-alert');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-alert')
        ], 'laravel-alert-views');

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-alert'),
        ], 'laravel-alert-lang');
    }
}