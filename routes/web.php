<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
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
    Route::get('/blog/create','create')->middleware('auth');
    Route::post('/blog/store','store')->middleware('auth');
});

//for User Login/out and SignUp and User Profile Routes
Route::controller(UserController::class)->group(function(){
    Route::get('/user/login','login')->middleware('guest')->name('login');
    Route::get('/user/logout','logout')->middleware('auth');
    Route::get('/user/signup','signup')->middleware('guest');
    Route::post('/user/register','register')->middleware('guest');
    Route::post('/user/post_login','post_login')->middleware('guest');
    Route::get('/user/profile','show')->middleware('auth');
});

//for User Comments
Route::post('/blogs/{blog:id}/comments',[CommentController::class,'store']);
