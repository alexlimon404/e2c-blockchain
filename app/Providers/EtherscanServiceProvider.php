<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Etherscan\Etherscan;

class EtherscanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('etherscan', function ($app) {
            return new Etherscan($app['config']['etherscan']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
