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
        $proxy = env('API_PROXY', '');
        $this->app->singleton(Client::class, function($app) use ($baseUrl, $proxy) {
            return new Client(
                [
                    'base_uri' => $baseUrl,
                    'proxy' => $proxy
                    ]
            );
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
