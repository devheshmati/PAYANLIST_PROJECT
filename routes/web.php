<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserWorkflowsController;
use App\Http\Controllers\StorageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("pages.home");
})->name('home');

Route::prefix('/auth')->group(function () {
    // login
    Route::get('/login', [AuthController::class, 'showLogin']);
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    // register
    Route::get('/register', [AuthController::class, 'showRegister']);
    Route::post('/register', [AuthController::class, 'register'])->name("register");

    // forget password
    Route::get('/forget-password', [AuthController::class, 'showForgetPassword']);
    Route::post('/forget-password', [AuthController::class, 'forgetPassword'])->name('foget-password');

    // reset password
    Route::get('/reset-password', [AuthController::class, 'showResetPassword']);
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('reset-password');

    //logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// user panel
Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');

    Route::get('profile', function () {
        return view('user.profile');
    })->name('user.profile');

    Route::get('settings', function () {
        return view('user.settings');
    })->name('user.settings');

    Route::get('reports', function () {
        return view('user.reports');
    })->name('user.reports');

    // workflows
    Route::resource('workflows', UserWorkflowsController::class);
});

// general pages
Route::get("/documents", function () {
    return view('pages.documents');
})->name('documents');

// storage route
Route::get('/public/storage', [StorageController::class, 'test']);
