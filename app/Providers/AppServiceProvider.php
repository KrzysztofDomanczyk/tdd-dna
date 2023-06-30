<?php

namespace App\Providers;

use Domains\Repositories\TableRepository;
use Illuminate\Support\ServiceProvider;
use Infrastructure\Repositories\ConcreteTableRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TableRepository::class, ConcreteTableRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
