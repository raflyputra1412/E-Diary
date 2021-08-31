<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
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
Route::get('/', [AuthController::class, 'viewlogin'])->middleware('guest')->name('viewlogin');
Route::get('/login', [AuthController::class, 'viewlogin'])->middleware('guest')->name('viewlogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'viewregister'])->middleware('guest')->name('viewregister');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');
Route::resource('/diary', DiaryController::class);
