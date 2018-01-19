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
            __DIR__ . '/../config/larahelp.php', 'larahelp'
        );
    }

    protected function bootPublications()
    {
        $this->publishes([
            __DIR__ . '/../config/larahelp.php' => config_path('larahelp.php'),
        ], 'larahelp_config');

    }
}
