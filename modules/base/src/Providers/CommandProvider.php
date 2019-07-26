<?php

namespace APV\Base\Providers;

use APV\Base\Commands\CreateModuleCommand;
use Illuminate\Support\ServiceProvider;

class CommandProvider extends ServiceProvider
{
    /**
     * @var \Illuminate\Foundation\Application
     */
    protected $app;

    public function boot()
    {
        $this->commands([
            CreateModuleCommand::class,
        ]);
    }
}
