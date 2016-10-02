<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../node_modules/bootstrap/dist' => public_path('packages/bootstrap'),
            __DIR__ . '/../../node_modules/font-awesome' => public_path('packages/fontawesome'),
            __DIR__ . '/../../node_modules/angular' => public_path('packages/angular'),
            __DIR__ . '/../../node_modules/jquery/dist' => public_path('packages/jquery'),
            __DIR__ . '/../../node_modules/normalize.css' => public_path('packages/normalize'),
            __DIR__ . '/../../node_modules/bootstrap-social' => public_path('packages/bootstrap-social'),
        ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
