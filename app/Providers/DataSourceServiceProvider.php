<?php

namespace App\Providers;

use App\Repositories\RepositoryManager;
use Illuminate\Support\ServiceProvider;

class DataSourceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\DataSource\DataSourceRepository', function ($app) {
            $manager = new RepositoryManager($app);

            return $manager->driver();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
