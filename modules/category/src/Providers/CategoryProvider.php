<?php
namespace APV\Category\Providers;

use APV\Base\Supports\Helper;
use APV\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;

/**
 * Class CategoryProvider
 * @package APV\Category\Providers
 */
class CategoryProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    /**
     * Boot up function
     */
    public function boot()
    {
        $this->setIsInConsole($this->app->runningInConsole())
            ->setNamespace('modules/category')
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
