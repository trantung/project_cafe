<?php

namespace APV\Shop\Providers;

use APV\Base\Supports\Helper;
use APV\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;

/**
 * Class ShopProvider
 */
class ShopProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot()
    {
        $this->setIsInConsole($this->app->runningInConsole())
            ->setNamespace('modules/shop')
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
