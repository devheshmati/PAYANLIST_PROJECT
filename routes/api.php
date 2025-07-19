<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController as ApiTaskController;
use App\Http\Controllers\WorkspaceController as ApiWorkspaceController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(
    function () {
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
        Route::post('/user-status', [AuthController::class, 'userStatus'])->middleware('auth:sanctum');
        Route::delete('/users', [AuthController::class, 'delete']);
    }
);

Route::middleware(['auth'])->prefix('user')->group(
    function () {
        Route::apiResource('workspaces', ApiWorkspaceController::class);
        Route::apiResource('workspaces.tasks', ApiTaskController::class);
    }
);
