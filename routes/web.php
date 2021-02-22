<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StatusController;


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
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project/{id}', [ProjectController::class, 'show']);
Route::post('/project', [ProjectController::class, 'create']);
Route::put('/project/{id}', [ProjectController::class, 'edit']);
Route::delete('/project/{id}', [ProjectController::class, 'delete']);
Route::get('/status', [StatusController::class, 'index']);