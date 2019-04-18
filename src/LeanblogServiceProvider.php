<?php

namespace Merfiduke\Leanblog;

use Illuminate\Support\ServiceProvider;

class LeanblogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Merfiduke\Leanblog\PostController');
        $this->loadViewsFrom(__DIR__.'/views', 'leanblog');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/admin/pages/blog'),
        ]);
    }
}
