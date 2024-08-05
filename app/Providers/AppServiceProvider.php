<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\LoggerInterface;
use App\Services\FileLogger;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LoggerInterface::class, FileLogger::class);
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
