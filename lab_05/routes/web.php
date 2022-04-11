<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('index');


Route::get('/posts', [MainController::class, 'posts'])->name('posts');
Route::get('/add-post', [MainController::class, 'addPost'])->name('addPost');
Route::post('/add-post', [MainController::class, 'createPost'])->name('createPost');
Route::get('/posts/categories/{category}', [PostController::class, 'postsByCategory'])->name('postsByCategory');
Route::get('/posts/{id}', [PostController::class, 'getPost'])->name('getPost');
