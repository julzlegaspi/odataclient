<?php

namespace Julzlegaspi\Odataclient;

use Illuminate\Support\ServiceProvider;
use Julzlegaspi\Odataclient\SAPODataClient;

class ODataClientServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/sap.php',
            'sap'
        );

        $this->app->singleton(SAPODataClient::class, function ($app) {
            return new SAPODataClient();
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/config/sap.php' => config_path('sap.php'),
        ]);
    }
}
