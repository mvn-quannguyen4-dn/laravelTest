<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users',[UserController::class,'index']);
// Route::get('/user/{user}',[UserController::class,'show']);
// Route::get('/createUser',[UserController::class,'create']);
// Route::get('/editUser/{user}',[UserController::class,'edit']);
// Route::get('/redirect',[UserController::class,'redirectRoute']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', PostController::class)->middleware('auth');

Route::put('/post/{post}', [PostController::class,'edit'])->middleware('can:update,post');
