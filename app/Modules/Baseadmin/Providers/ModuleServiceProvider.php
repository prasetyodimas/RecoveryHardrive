<?php

namespace App\Modules\Baseadmin\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'baseadmin');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'baseadmin');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'baseadmin');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
