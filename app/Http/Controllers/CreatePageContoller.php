<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePageContoller extends Controller
{
    function newPageView(){
        return view('createNewPage');
    }
}
