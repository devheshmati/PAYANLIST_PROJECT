<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {*/
/*    return $request->user();*/
/*})->middleware('auth:sanctum');*/

Route::apiResource("/blogs", BlogController::class)->middleware('auth:sanctum');

Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    Route::post('/user-status', [AuthController::class, 'userStatus'])->middleware('auth:sanctum');
    Route::delete('/users', [AuthController::class, 'delete']);
});
