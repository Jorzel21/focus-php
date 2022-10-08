<?php

namespace Jorzel\Focus;

use Illuminate\Support\ServiceProvider;
use Jorzel\Focus\Facades\Focus;

class FocusServiceProvider extends ServiceProvider
{   
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/focus.php', 'focus');

        $this->app->singleton('focus', function ($app) {
            return new Focus;
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
            __DIR__.'/config/focus.php' => config_path('focus.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['focus'];
    }
}
