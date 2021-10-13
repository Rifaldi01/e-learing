<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacher\teacherController;
use App\Http\Controllers\teacher\annoucementController;
use App\Http\Controllers\teacher\materialController;
use App\Http\Controllers\teacher\profileController;
use App\Http\Controllers\teacher\sceduleController;
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



    Route::get('/', function () {
        return view('layouts.component.assets-teacher.master');
    });


