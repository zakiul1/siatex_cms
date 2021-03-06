<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CreatePostContoller;
use App\Http\Controllers\CreatePageContoller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', [HomeController::class, 'home'])->name(
    'home'
);



/* --------------------PostType -------------Route ----------------- */


Route::prefix("post")->group(function () {

    Route::get('/{postType}', [PostController::class, 'index'])->name(
        'post.listview'
    );
    Route::get('/{postType}/new', [PostController::class, 'newPostCreate'])->name(
        'post.new'
    );
    Route::post('/{postType}/store', [PostController::class, 'storePost'])->name(
        'post.store'
    );
});

