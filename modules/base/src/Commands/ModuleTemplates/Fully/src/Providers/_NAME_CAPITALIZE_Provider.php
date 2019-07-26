<?php
namespace APV\_NAME_CAPITALIZE_\Providers;

use APV\Base\Supports\Helper;
use APV\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;

/**
 * Class _NAME_CAPITALIZE_Provider
 * @package APV\_NAME_CAPITALIZE_\Providers
 */
class _NAME_CAPITALIZE_Provider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    /**
     * Boot up function
     */
    public function boot()
    {
        $this->setIsInConsole($this->app->runningInConsole())
            ->setNamespace('modules/_NAME_LOWERCASE_')
            ->loadAndPublishConfigurations(['general'])
            ->loadRoutes(['web','api'])
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->publishAssetsFolder()
            ->loadMigrations();
    }

    /**
     * Register function
     */
    public function register()
    {
        Helper::autoload(__DIR__ . '/../../helpers');
    }
}
