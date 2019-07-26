<?php
namespace APV\Product\Providers;

use APV\Base\Supports\Helper;
use APV\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;

/**
 * Class ProductProvider
 * @package APV\Product\Providers
 */
class ProductProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    /**
     * Boot up function
     */
    public function boot()
    {
        $this->setIsInConsole($this->app->runningInConsole())
            ->setNamespace('modules/product')
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
        $this->registerEloquentFactoriesFrom(__DIR__.'/../../database/factories');
        Helper::autoload(__DIR__ . '/../../helpers');
    }

    /**
     * Register factories.
     *
     * @param  string  $path
     * @return void
     */
    public function registerEloquentFactoriesFrom($path)
    {
        $this->app->make(EloquentFactory::class)->load($path);
    }
}
