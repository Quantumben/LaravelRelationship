<?php

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


Route::get('/getUser', [\App\Http\Controllers\UserController::class, 'getUser']);
Route::get('/getPost', [\App\Http\Controllers\UserController::class, 'getPost']);

