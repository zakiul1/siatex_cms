<?php
namespace App\Helper\Facade;

use Illuminate\Support\Facades\Facade;

class InitializationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'initialization';
    }
}
