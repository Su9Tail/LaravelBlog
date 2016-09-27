<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Interfaces\PostRepositoyInterface', 'App\Repositories\Implementations\PostRepository');
    }

    public function provides()
    {
        return ['App\Repositories\Interfaces\PostRepositoyInterface'];
    }
}
