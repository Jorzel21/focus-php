<?php

namespace Jorzel\FocusPHP;

use Illuminate\Support\ServiceProvider;
use Jorzel\FocusPHP\Facades\FocusPHP;

class FocusPHPServiceProvider extends ServiceProvider
{   
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/focusphp.php', 'focusphp');

        $this->app->singleton('focusphp', function ($app) {
            return new FocusPHP;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/focusphp.php' => config_path('focusphp.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['focusphp'];
    }
}
