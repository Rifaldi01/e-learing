<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\annoucementtController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\materialController;
use App\Http\Controllers\admin\scheduleController;
use App\Http\Controllers\admin\studentController;
use App\Http\Controllers\admin\teacherController;

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

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin', 'auth',]], function (){
Route::get('/', [dashboardController::class, 'index'])->name('dashboard');

    });


