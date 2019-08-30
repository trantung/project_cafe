<?php
namespace APV\Promotion\Providers;

use APV\Base\Supports\Helper;
use APV\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;

/**
 * Class LevelProvider
 * @package APV\Promotion\Providers
 */
class PromotionProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    /**
     * Boot up function
     */
    public function boot()
    {
        $this->setIsInConsole($this->app->runningInConsole())
            ->setNamespace('modules/promotion')
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
