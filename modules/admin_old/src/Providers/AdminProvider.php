<?php

namespace APV\Admin\Providers;

use APV\Base\Supports\Helper;
use APV\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;

/**
 * Class AdminProvider
 */
class AdminProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot()
    {
        $this->setIsInConsole($this->app->runningInConsole())
            ->setNamespace('modules/admin')
            ->loadAndPublishConfigurations(['general'])
            ->loadRoutes(['web', 'api'])
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->publishAssetsFolder()
            ->loadMigrations();
    }

    public function register()
    {
        Helper::autoload(__DIR__ . '/../../helpers');
    }
}
