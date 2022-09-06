<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index'])->name('postindex');
Route::get('register-create', [UserController::class, 'create'])->name('registercreate');
Route::post('register-store', [UserController::class, 'register'])->name('register');
Route::post('login-user', [UserController::class, 'login'])->name('loginuser');
Route::post('logout-user', [UserController::class, 'logout'])->name('logout');  