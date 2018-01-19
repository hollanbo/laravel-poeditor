<?php

namespace hollanbo\LaravelPoeditor;

use Illuminate\Support\ServiceProvider;

class PoeditorProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'hollanboLaravelPoeditor');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/hollanboLaravelPoeditor'),
        ]);

        $this->publishes([
            __DIR__.'/js' => public_path('js/vendor/hollanboLaravelPoeditor'),
        ], 'public');

        $this->publishes([
        __DIR__.'/config.php' => config_path('laravel-poeditor.php'),
    ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('hollanbo\LaravelPoeditor\PoeditorController');

        $this->mergeConfigFrom(
            __DIR__.'/config.php', 'laravel-poeditor'
        );
    }
}
