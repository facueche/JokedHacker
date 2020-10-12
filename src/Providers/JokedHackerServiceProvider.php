<?php

namespace DebianMoor\JokedHacker\Providers;

use Illuminate\Support\ServiceProvider;

class JokedHackerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/routes.php');
        $this->app->make('DebianMoor\JokedHacker\Controllers\RedirectController');
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
