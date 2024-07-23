<?php

namespace App\Providers;

use App\Services\HemisService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register():void
    {
        $this->app->bind('\App\Services\HemisService', HemisService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //
    }
}
