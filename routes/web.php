<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
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

/****************************  
ログイン画面
/****************************/
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login']);


// 管理者用グループ
Route::group(['middleware' => ['auth', 'level']], function () {

    /****************************  
    ユーザー登録
    *****************************/
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'create']);


    /****************************  
    休講日登録
    *****************************/
    Route::get('/holiday', [TimeHolidayController::class, 'index']);
    Route::post('/holiday', [TimeHolidayController::class, 'create']);
    
});

// 管理者、常勤・非常勤用グループ
Route::group(['middleware' => 'auth'], function () {

    /****************************  
    メニュー画面
    *****************************/
    Route::get('/menu', [MenuController::class, 'index']);

});
