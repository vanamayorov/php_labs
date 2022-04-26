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
Route::get('/cryptos', [MainController::class, 'cryptos'])->name('cryptos');
Route::get('/cryptos/{id}', [MainController::class, 'getCryptoById'])->name('getCryptoById');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::get('/categories/{category}', [MainController::class, 'category'])->name('category');
Route::get('/cryptos/tag/{id}', [MainController::class, 'getCryptoByTag'])->name('getCryptoByTag');
