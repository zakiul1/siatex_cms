<?php
namespace App\Helper\Facade;

use Illuminate\Support\Facades\Facade;


class UtilityFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'utility';
    }
}
