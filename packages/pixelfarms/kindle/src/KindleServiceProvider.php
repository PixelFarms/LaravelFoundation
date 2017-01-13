<?php

namespace PixelFarms\Kindle;

use Illuminate\Support\ServiceProvider;

class KindleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->app->register('Pretty-Routes\ServiceProvider::class');
        //
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');

        //$value = config('courier.option');

        $this->loadViewsFrom((__DIR__ . '/views'), 'kindle');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/kindle'),
        ]);

        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('kindle.php')
        ]);
        //    $this->loadMigrationsFrom(__DIR__.'/path/to/migrations');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('PixelFarms\Kindle\KindleController');
        //$this->loadViewsFrom(__DIR__.'/views', 'kindle');
        $this->mergeConfigFrom(
            __DIR__ . '/config/config.php', 'kindle'
        );
        //
            /*
     * Register the service provider for the dependency.
     */
    //$this->app->register('LucaDegasperi\OAuth2Server\OAuth2ServerServiceProvider');
    /*
     * Create aliases for the dependency.
     */
//    $loader = \Illuminate\Foundation\AliasLoader::getInstance();
 //   $loader->alias('AuthorizationServer', 'LucaDegasperi\OAuth2Server\Facades\AuthorizationServerFacade');
   // $loader->alias('ResourceServer', 'LucaDegasperi\OAuth2Server\Facades\ResourceServerFacade');

                //
        //Barryvdh\Debugbar\ServiceProvider::class,
//'Debugbar' => Barryvdh\Debugbar\Facade::class,
        //$this->app->register('Pretty-Routes\ServiceProvider::class');
    //$provider = new \PrettyRoutes\ServiceProvider::class;
//App::register(\PrettyRoutes\ServiceProvider::class);
        //App::register('Pretty-Routes\ServiceProvider::class');

        //AliasLoader::getInstance()->alias("Debugbar",'Barryvdh\Debugbar\Facade::class');

            $this->app->bind('pixelfarms-kindle', function() {
            return new Kindle();
        });
    }
}
