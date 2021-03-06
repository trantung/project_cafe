<?php
namespace APV\Topping\Providers;

use APV\Base\Supports\Helper;
use APV\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;

/**
 * Class ToppingProvider
 * @package APV\Topping\Providers
 */
class ToppingProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    /**
     * Boot up function
     */
    public function boot()
    {
        $this->setIsInConsole($this->app->runningInConsole())
            ->setNamespace('modules/topping')
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
