<?php
namespace jiit\MyPackage;
use Illuminate\Support\ServiceProvider;
class MyPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MyPackage::class, function () {
            return new MyPackage();
        });
        $this->app->alias(MyPackage::class, 'my-package');
        $this->app->make('jiit\MyPackage\MypackageController');
    }
}