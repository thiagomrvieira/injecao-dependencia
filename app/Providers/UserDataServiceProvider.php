<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UserDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\ExternalDataInterface', function($app) {
            return new \App\Services\UserDataService($app->make('GuzzleHttp\Client'));
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
