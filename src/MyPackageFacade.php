<?php
namespace jiit\MyPackage;
use Illuminate\Support\Facades\Facade;
class MyPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'my-package';
    }
}