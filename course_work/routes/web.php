<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
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
Route::get('/our-works', [MainController::class, 'ourWorks'])->name('ourWorks');
Route::get('/staff', [MainController::class, 'staff'])->name('staff');
Route::get('/contact-us', [MainController::class, 'contactUs'])->name('contactUs');
Route::post('/send-task', [MainController::class, 'sendTask'])->name('sendTask');
