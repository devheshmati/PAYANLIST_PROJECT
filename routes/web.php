<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\WorkspaceInvitationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("pages.home");
})->name('home');

Route::prefix('/auth')->group(function () {
    // login
    Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    // register
    Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
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
        $user = Auth::user(); // get current user

        $workspaces = $user->createdWorkspaces()->withCount([
            'tasks as todo_tasks_count' => fn($query) => $query->where('status', 'todo'),
            'tasks as in_progress_tasks_count' => fn($query) => $query->where('status', 'in_progress'),
            'tasks as done_tasks_count' => fn($query) => $query->where('status', 'done'),
        ])->get();

        // Sum each type of task count across all workspaces
        $allTodoTasksCount = $workspaces->sum('todo_tasks_count');
        $allInProgressTasksCount = $workspaces->sum('in_progress_tasks_count');
        $allDoneTasksCount = $workspaces->sum('done_tasks_count');

        // get last workspace opend by user
        $maxRecentCount = 3;
        $recentWorkspaces = $user->workspaces()
            ->with('creator')
            ->withPivot('last_opened_at')
            ->orderByDesc('user_workspace_roles.last_opened_at')
            ->take($maxRecentCount)
            ->get();

        return view('user.dashboard', [
            'allTodoTasksCount' => $allTodoTasksCount,
            'allInProgressTasksCount' => $allInProgressTasksCount,
            'allDoneTasksCount' => $allDoneTasksCount,
            'recentWorkspaces' => $recentWorkspaces
        ]);
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

    // workspace
    Route::resource('workspaces', WorkspaceController::class);

    // task
    Route::resource('workspaces.tasks', TaskController::class);
    Route::post('workspaces/{workspace}/tasks/{task}/update-status', [TaskController::class, 'updateStatus'])->name('workspaces.tasks.updateStatus');

    // workspace invitation
    Route::post('workspaces/{workspace}/invite', [WorkspaceInvitationController::class, 'invite'])
        ->name('user.workspace.invite');

    // team creation
    Route::resource('workspaces.teams', TeamController::class)->only(['store']);
});
