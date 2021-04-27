<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // REGISTRAMOS EL CLIENTE REST-API
        $baseUrl = env('API_ENDPOINT');
        $this->app->singleton(Client::class, function($app) use ($baseUrl) {
            return new Client();
        });
    

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
