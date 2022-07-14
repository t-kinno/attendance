<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TimeHolidayController;
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

Route::get('/', function () {
    return view('welcome');
});

/****************************  
休講日登録
/****************************/  
// laravel8以降の書き方
Route::get('/holiday', [TimeHolidayController::class ,'index'])->middleware('auth');
Route::post('/holiday', [TimeHolidayController::class ,'create'])->middleware('auth');

/****************************  
ログイン画面
/****************************/  
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

/****************************  
メニュー画面
/****************************/  
Route::get('/menu', [MenuController::class, 'index'])->middleware('auth');
