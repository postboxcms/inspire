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
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerCommands();
    }
}
