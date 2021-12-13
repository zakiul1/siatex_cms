<?php
namespace App\Helper\Facade;

use Illuminate\Support\Facades\Facade;


class MetaBoxFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'metaBox';
    }
}
