<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProjectController;
use App\Models\Activity;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', ProjectController::class);
Route::resource('/activities', ActivityController::class);