<?php
namespace jiit\MyPackage\Tests;
use jiit\MyPackage\MyPackageFacade;
use jiit\MyPackage\MyPackageServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return jiit\MyPackage\MyPackageServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [MyPackageServiceProvider::class];
    }
    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'MyPackage' => MyPackageFacade::class,
        ];
    }
}