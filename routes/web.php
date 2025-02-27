<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
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

Route::view('/','index')->name('index');

Route::get('/registration',[RegisterController::class, 'create'])->middleware('guest');
Route::post('/registration',[RegisterController::class, 'store'])->middleware('guest')->name('registration');

Route::get('/login',[LoginController::class, 'create'])->middleware('guest');
Route::post('/login',[LoginController::class, 'store'])->middleware('guest')->name('login');
Route::post('/logout',[LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::view('/dashboard','dashboard')->middleware('auth')->name('dashboard');