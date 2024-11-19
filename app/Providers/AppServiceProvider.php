<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
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
    public function boot()
    {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        Route::middleware('web')
        ->group(base_path('routes/principal.php'));

        Route::middleware('web')
        ->group(base_path('routes/laboratorio.php'));
    }
}