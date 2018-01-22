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

        $this->ensurePaths();
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

    public function ensurePaths() {
        $path = config('laravel-poeditor.source_dir');

        $locales = config('laravel-poeditor.supported_locales');

        foreach ($locales as $locale) {
            $full_path = $path . $locale . '/LC_MESSAGES/';

            if (!file_exists($full_path)) {
                mkdir($full_path, 0777, true);
            }
        }
    }
}
