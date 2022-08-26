<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//for Blogs Routes
Route::controller(BlogController::class)->group(function(){
    Route::get('/','index');
    Route::get('/blogs/{blog:slug}','show');
    Route::get('/blog/back','blogBack');
});

//for User Login/out and SignUp Routes
Route::controller(UserController::class)->group(function(){
    Route::get('/user/login','login');
    Route::get('/user/logout','logout');
    Route::get('/user/signup','signup');
    Route::post('/user/register','register');
    Route::post('/user/post_login','post_login');
});
