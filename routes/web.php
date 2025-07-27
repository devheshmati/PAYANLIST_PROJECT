<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\WorkspaceInvitationController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// pages
// Home
Route::get(
    '/', function (Request $request) {
        return view("pages.home");
    }
)->name('home');

// Feature
Route::get(
    '/feature', function (Request $request) {
        return view("pages.feature");
    }
)->name('feature');

// contact
// Show Contact Us Page
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

// Handle Form Submission
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::prefix('/auth')->group(
    function () {
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
    }
);

// user panel
Route::middleware(['auth'])->prefix('user')->group(
    function () {
        Route::get(
            'dashboard', function () {
                $user = Auth::user(); // get current user

                $workspaces = $user->createdWorkspaces()->withCount(
                    [
                    'tasks as todo_tasks_count' => fn($query) => $query->where('status', 'todo'),
                    'tasks as in_progress_tasks_count' => fn($query) => $query->where('status', 'in_progress'),
                    'tasks as done_tasks_count' => fn($query) => $query->where('status', 'done'),
                    ]
                )->get();

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

                return view(
                    'user.dashboard', [
                    'allTodoTasksCount' => $allTodoTasksCount,
                    'allInProgressTasksCount' => $allInProgressTasksCount,
                    'allDoneTasksCount' => $allDoneTasksCount,
                    'recentWorkspaces' => $recentWorkspaces
                    ]
                );
            }
        )->name('user.dashboard');

        Route::get(
            'profile', function (Request $request) {
                $user = Auth::user();

                // get skill list
                $skills = json_decode($user->detail?->skills, true) ?? [];

                return view('user.profile', ['user' => $user, 'skills' => $skills]);
            }
        )->name('user.profile');

        Route::put('profile/main', [UserDetailController::class, 'mainUpdate'])->name('user.profile.mainUpdate');
        Route::put('profile/description', [UserDetailController::class, 'descriptionUpdate'])->name('user.profile.descriptionUpdate');
        Route::put('profile/skills', [UserDetailController::class, 'skillsUpdate'])->name('user.profile.skillsUpdate');
        Route::put('profile/avatar', [UserDetailController::class, 'avatarUpdate'])->name('user.profile.avatarUpdate');

        // Route::get(
        //     'settings', function () {
        //         return view('user.settings');
        //     }
        // )->name('user.settings');
        //
        // Route::get(
        //     'reports', function () {
        //         return view('user.reports');
        //     }
        // )->name('user.reports');

        // workspace
        // Route::resource('workspaces', WorkspaceController::class);
        Route::get('workspaces', [WorkspaceController::class, 'index'])->name('workspaces.index');
        Route::get('workspaces/create', [WorkspaceController::class, 'create'])->name('workspaces.create');
        Route::post('workspaces/store', [WorkspaceController::class, 'store'])->name('workspaces.store');
        Route::get('workspaces/{workspace}', [WorkspaceController::class, 'show'])->name('workspaces.show');

        // task
        Route::resource('workspaces.tasks', TaskController::class);
        Route::post('workspaces/{workspace}/tasks/{task}/update-status', [TaskController::class, 'updateStatus'])->name('workspaces.tasks.updateStatus');

        // workspace invitation
        Route::post('workspaces/{workspace}/invite', [WorkspaceInvitationController::class, 'invite'])
        ->name('user.workspace.invite');

        // team creation
        Route::resource('workspaces.teams', TeamController::class)->only(['store']);
    }
);
