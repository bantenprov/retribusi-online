<?php namespace Bantenprov\RetribusiOnline;

use Illuminate\Support\ServiceProvider;
use Bantenprov\RetribusiOnline\Console\Commands\RetribusiOnlineCommand;

/**
 * The RetribusiOnlineServiceProvider class
 *
 * @package Bantenprov\RetribusiOnline
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RetribusiOnlineServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('retribusi-online', function ($app) {
            return new RetribusiOnline;
        });

        $this->app->singleton('command.retribusi-online', function ($app) {
            return new RetribusiOnlineCommand;
        });

        $this->commands('command.retribusi-online');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'retribusi-online',
            'command.retribusi-online',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('retribusi-online.php');

        $this->mergeConfigFrom($packageConfigPath, 'retribusi-online');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'retribusi-online');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/retribusi-online'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'retribusi-online');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/retribusi-online'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => public_path('vendor/retribusi-online'),
        ], 'public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }
}
