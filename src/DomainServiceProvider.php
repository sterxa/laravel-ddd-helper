<?php

namespace Sterxa\Console;

use Illuminate\Support\ServiceProvider;
use Sterxa\Console\Commands\DTOCommand;
use Sterxa\Console\Commands\EnumCommand;
use Sterxa\Console\Commands\RuleCommand;
use Sterxa\Console\Commands\EventCommand;
use Sterxa\Console\Commands\ModelCommand;
use Sterxa\Console\Commands\ActionCommand;
use Sterxa\Console\Commands\PolicyCommand;
use Sterxa\Console\Commands\ObserverCommand;

class DomainServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/ddd-helper.php' => config_path('ddd-helper.php'),
            ], 'ddd-helper-config');

            $this->commands([
                ActionCommand::class,
                DTOCommand::class,
                EnumCommand::class,
                EventCommand::class,
                ModelCommand::class,
                ObserverCommand::class,
                PolicyCommand::class,
                RuleCommand::class,
            ]);
        }

        $this->mergeConfigFrom(__DIR__.'/../config/ddd-helper.php', 'ddd-helper');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
