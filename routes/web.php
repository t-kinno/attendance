<?php

use App\Http\Controllers\HelloController;
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

// laravel8以降の書き方
Route::get('holiday', [TimeHolidayController::class ,'index']);

// timeholiday.bladeからpost送信時の動き
Route::post('/holiday', [TimeHolidayController::class ,'create']);