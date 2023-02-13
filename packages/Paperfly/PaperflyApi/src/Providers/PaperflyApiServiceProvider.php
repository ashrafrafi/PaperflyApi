<?php

namespace Paperfly\PaperflyApi\Providers;

use Illuminate\Support\ServiceProvider;

class PaperflyApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/paperfly_api.php' => config_path('paperfly_api.php'),
        ]);

        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/paperfly_api.php', 'paperfly_api'
        );
    }
}
