<?php

namespace DebianMoor\JokedHacker\Providers;

use DebianMoor\JokedHacker\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class JokedHackerServiceProvider extends ServiceProvider
{
    private const BANNED_ROUTES = [
        '.env',
        'admin',
        'admin.php',
        'env',
        'wp-admin',
        'wp-admin.php'
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach (static::BANNED_ROUTES as $route) {
            Route::get($route, RedirectController::class);
        }
    }
}
