<?php

namespace PostboxCMS\Inspire;

use Illuminate\Support\ServiceProvider;
use PostboxCMS\Inspire\Console\InspireCommand;

class InspireServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->registerCommands();
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InspireCommand::class,
            ]);
        }
    }
}
