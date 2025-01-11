<?php

namespace PostboxCMS\Inspire;

use Illuminate\Support\ServiceProvider;
use PostboxCMS\Inspire\Console\InspireCommand;

class InspireServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InspireCommand::class,
            ]);
        }
    }

    /**
     * Register routes.
     */
    public function registerRoutes(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    /**
     * Register publishing.
     */
    public function registerPublishing(): void
    {
        $this->publishes([
            __DIR__.'/config/inspire.php' => config_path('inspire.php'),
        ], 'inspire-config');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerCommands();
        $this->registerRoutes();
        $this->registerPublishing();
    }
}
