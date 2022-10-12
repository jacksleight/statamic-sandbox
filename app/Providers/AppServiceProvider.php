<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Vite;
use Statamic\Statamic;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Statamic::script('app', 'cp');
        Statamic::vite('app', [
            'resources/js/cp.js',
            'resources/css/cp.css',
        ]);

        Vite::useHotFile(base_path('addons/dev/bite/public/hot'));
    }
}
