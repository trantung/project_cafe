<?php
namespace APV\Base\Providers;

use APV\Base\Supports\Helper;
use APV\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;

/**
 * Class ModuleProvider
 */
class ModuleProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;
    
    public function boot()
    {
        $this->setIsInConsole($this->app->runningInConsole())
            ->setNamespace('modules/base')
            ->loadAndPublishConfigurations(['general','constants'])
            ->loadRoutes(['web','api'])
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->publishAssetsFolder()
            ->loadMigrations();
        $this->app->register(CommandProvider::class);
    }

    public function register()
    {
        Helper::autoload(__DIR__ . '/../../helpers');
    }
}
