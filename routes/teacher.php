<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacher\teacherController;
use App\Http\Controllers\teacher\annoucementController;
use App\Http\Controllers\teacher\materialController;
use App\Http\Controllers\teacher\profileController;
use App\Http\Controllers\teacher\ScheduleController;
use App\Http\Controllers\teacher\taskController;

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

Route::group(['middleware' => ['role:teacher']], function () {
    Route::get('/teacher',[teacherController::class,'index']);
    Route::get('/schedule-subject',[ScheduleController::class,'index'])->name('schedule');
    Route::get('/announcement',[annoucementController::class,'index'])->name('announcement');
    Route::get('/material',[materialController::class,'index'])->name('material');
    Route::get('/profile',[profileController::class,'index'])->name('profile');
    Route::get('/task',[taskController::class,'index'])->name('task');
});



