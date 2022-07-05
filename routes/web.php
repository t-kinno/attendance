<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
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
Route::get('/holiday', [TimeHolidayController::class ,'index']);
Route::post('/holiday', [TimeHolidayController::class ,'create']);

/****************************  
ログイン画面
/****************************/  
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);




// admin権限のあるユーザの操作
Route::middleware('auth:api', 'admin_auth')->group(function(){
    Route::get('/admin', function(){
        return 'you are admin user!';
    });
});
// user権限、admin権限のあるユーザの操作
Route::middleware('auth:api')->group(function(){
    Route::get('/user', function(){
        return 'you are member user!';
    });
});
