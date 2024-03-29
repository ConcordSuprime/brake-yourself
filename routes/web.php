<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Profile\TelegramIdController;
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

Auth::routes();

Route::prefix('')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::prefix('/profile')->group(function () {
        Route::get('/me', [ProfileController::class, 'getProfilePage'])->name('profile.me');
        Route::prefix('telegrams')->group(function () {
            Route::post('/', [TelegramIdController::class, 'create'])->name('profile.telegram.create');
        });
    });
})->middleware('auth');
