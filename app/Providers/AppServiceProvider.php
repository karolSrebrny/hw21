<?php

namespace App\Providers;

use Hillel\Geo\GeoServiceInterface;
use Hillel\Geo\IpApiGeoService;
use Hillel\Geo\MaxmindGeoService;
use GeoIp2\Database\Reader;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(GeoServiceInterface::class, function (){
//            return new IpApiGeoService();
            return new MaxmindGeoService();
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
