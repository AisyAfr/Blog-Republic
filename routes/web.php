<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MakanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;

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
return view('index');
})->middleware(['auth','verified']);

// Route::get('hello', [HelloController::class, 'index']);
// Route::get('hello', 'App\Http\Controllers\HelloController@world_message');

//============================BLOG REPUBLIC=====================================================

//AUTH

// Route::get('register',[AuthController::class, 'register_form'])->name('register');
// Route::post('register',[AuthController::class, 'register']);
// Route::get('login',[AuthController::class, 'login']);
// Route::post('login',[AuthController::class, 'authenticate']);
// Route::get('logout', [AuthController::class, 'logout']);


//CONTENT

Route::get('posts',[PostController::class, 'index']);
Route::get('posts/trash',[PostController::class, 'trash']);
Route::get('posts/create',[PostController::class, 'create']);
Route::post('posts',[PostController::class, 'store']);
Route::get('posts/{id}',[PostController::class, 'show']);
Route::get('posts/{id}/edit',[PostController::class, 'edit']);
Route::patch('posts/{id}',[PostController::class, 'update']);
Route::delete('posts/{id}/delete',[PostController::class, 'destroy']);
Route::delete('posts/{id}/permanents',[PostController::class, 'permanents']);
Route::post('posts/{id}/undo',[PostController::class, 'undo']);


//COMMENT

Route::get('posts/{id}/commentPage',[CommentController::class,'create']);
Route::post('posts/{id}',[CommentController::class,'commentExecute']);
//END BLOG REPUBLIC
