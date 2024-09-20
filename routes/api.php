<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Authenticated routes
Route::middleware('auth:sanctum')->group(function () {
    // Route::get('/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'store']);
});


// Public Route
Route::post('/login', [AuthController::class, 'login']);
Route::get('/users', [UserController::class, 'index']);
// Route::post('/users', [UserController::class, 'store']);