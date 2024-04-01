<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\postController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [userController::class, 'ShowCorrectHome'])->name('login');
Route::post('/register', [userController::class, 'register'])->middleware('guest');
Route::post('/login', [userController::class, 'login'])->middleware('guest');
Route::post('/logout', [userController::class, 'logout'])->middleware('auth');

Route::get('/create-post', [postController::class, 'showCreateForm'])->middleware('auth');
Route::post('/create-post', [PostController::class, 'storeNewPost'])->middleware('auth');
Route::get('/post/{post}', [postController::class, 'showSinglePost']);
Route::delete('/post/{post}',[postController::class, 'delete']);

Route::get('profile/{profile:username}', [userController::class, 'profile']);


Route::post('/post/{post}/comments', [PostController::class, 'storeComment'])->middleware('auth');

Route::get('/resources', [PostController::class, 'resources'])->middleware('auth');

Route::post('/comment/{comment}/star', [postController::class, 'starComment'])->middleware('auth');

Route::delete('/comment/{comment}', [postController::class, 'destroyComment'])->name('comment.destroy');



