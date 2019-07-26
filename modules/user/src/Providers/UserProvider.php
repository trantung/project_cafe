<?php

namespace APV\User\Providers;

use APV\Base\Supports\Helper;
use APV\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;

/**
 * Class UserProvider
 */
class UserProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot()
    {
        $this->setIsInConsole($this->app->runningInConsole())
            ->setNamespace('modules/user')
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
