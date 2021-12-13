<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePostContoller extends Controller
{
    function newPostView(){
        return view('createNewPost');
    }
}
