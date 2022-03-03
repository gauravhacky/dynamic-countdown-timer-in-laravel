<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountdownTimerController;

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

#Countdown timer example
Route::get('/create-timer', [CountdownTimerController::class, 'create']);
Route::post('/update-timer', [CountdownTimerController::class, 'update'])->name('timer.update');
Route::get('/view-timer', [CountdownTimerController::class, 'view']);