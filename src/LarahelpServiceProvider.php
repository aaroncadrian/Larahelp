<?php

namespace AaronAdrian\Larahelp;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class LarahelpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootLoadings();
        $this->bootPublications();

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../publishable/config/larahelp.php', 'larahelp'
        );
    }

    protected function bootLoadings()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'larahelp');
    }

    protected function bootPublications()
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/larahelp'),
        ]);

        $this->publishes([
            __DIR__ . '/../config/larahelp.php' => config_path('larahelp.php'),
        ], 'larahelp_config');

    }
}
