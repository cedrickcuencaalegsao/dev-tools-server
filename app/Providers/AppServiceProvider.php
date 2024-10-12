<?php

namespace App\Providers;

use App\Domain\Tools\ToolsRepository;
use App\Infrastructure\Persistence\Eloquent\Tools\EloquentToolsRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ToolsRepository::class, EloquentToolsRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
