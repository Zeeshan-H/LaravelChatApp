<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\Auth\SecondLoginController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'userlogout'])->name('home.logout');

Route::get('/load-messages', [App\Http\Controllers\HomeController::class, 'messages'])->name('home.message');

Route::post('/send', [App\Http\Controllers\HomeController::class, 'sendMessage']);

Route::prefix('user2')->group(function() {
    Route::get('/login', [SecondLoginController::class, 'showLoginForm'])->name('user2.login');
    Route::post('/login/submit', [SecondLoginController::class, 'login'])->name('user2.submit');
    Route::get('/', [App\Http\Controllers\SecondController::class, 'index'])->name('user2.home');
    Route::post('/logout', [SecondLoginController::class, 'logout'])->name('user2.logout');
});

