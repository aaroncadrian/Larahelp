<?php

namespace AaronAdrian\Larahelp;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LarahelpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPublications();
        $this->registerBladeDirectives();
    }

    /**
     * Register the Blade directives from this package.
     *
     * @return void
     */
    protected function registerBladeDirectives()
    {
        Blade::directive('css', function($expression) {
            return "<?php echo css({$expression}); ?>";
        });

        Blade::directive('js', function($expression) {
            return "<?php echo js({$expression}); ?>";
        });

        Blade::directive('cssMix', function($expression) {
            return "<?php echo mix_asset_css({$expression}); ?>";
        });

        Blade::directive('jsMix', function($expression) {
            return "<?php echo mix_asset_js({$expression}); ?>";
        });
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

    /**
     * Register the files that need to be published.
     *
     * @return void
     */
    protected function registerPublications()
    {
        $this->publishes([
            __DIR__ . '/../config/larahelp.php' => config_path('larahelp.php'),
        ], 'larahelp_config');
    }
}
