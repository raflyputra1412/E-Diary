<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [AuthController::class, 'viewlogin'])->name('viewlogin');
Route::post('login', [AuthController::class, 'proseslogin'])->name('proseslogin');

Route::get('register', [AuthController::class, 'viewregister'])->name('viewregister');
Route::post('prosesregister', [AuthController::class, 'prosesregister'])->name('prosesregister');