<?php
namespace App\Helper\Facade;

use Illuminate\Support\Facades\Facade;
class AdminSidebarFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'adminsidebar';
    }
}