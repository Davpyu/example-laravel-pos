<?php

namespace App\Providers;

use App\Contracts\Services\AuthContract;
use App\Services\AuthService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private $bind = [
        AuthContract::class => AuthService::class
    ];

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
        foreach ($this->bind as $key => $value) {
            $this->app->bind($key, $value);
        }
    }
}
