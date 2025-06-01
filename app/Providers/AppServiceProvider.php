<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
            
    Artisan::call('migrate', ['--force' => true]);

    Artisan::call('db:seed', ['--force' => true]);

        Carbon::setLocale('uk');
    }
}
