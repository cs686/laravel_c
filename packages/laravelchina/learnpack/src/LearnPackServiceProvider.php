<?php

namespace laravelchina\learnpack;

use Illuminate\Support\ServiceProvider;

/**
 * Class LearnPackServiceProvider
 * @package laravelchina\learnpack
 */
class LearnPackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app->make(LearnPackController::class);
        include (__DIR__ . '/web.php');
        $this->loadViewsFrom(__DIR__.'/views','learnpack');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
