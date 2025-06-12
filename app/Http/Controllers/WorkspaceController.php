<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $userCreatedWorkspaces = $user->createdWorkspaces()->with('users')->get();

        return view('user.workspaces.index', ['workspaces' => $userCreatedWorkspaces]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.workspaces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('workspaces')->where(function ($query) use ($request) {
                    return $query->where('created_by', $request->user()->id);
                }),
            ],
            'description' => 'nullable|string',
        ]);

        $userCreatedWorkspaces = $request->user()->createdWorkspaces;

        // check if user reach to the maximum capacity for making workspace
        $maxWorkspaceCapacity = 5;
        if ($userCreatedWorkspaces->count() < $maxWorkspaceCapacity) {
            $newWorkspace = Workspace::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'created_by' => Auth::id()
            ]);

            return redirect()->back()->with('message', 'The new workspace is created!');
        } else {
            return redirect()->back()->with('alertMessage', 'You have reached maximum capacity in free account! For unlimited features Upgrade your account.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $workspace = Auth::user()->createdWorkspaces->where('id', $id)->firstOrFail();
        $tasks = $workspace->tasks;
        $roles = Role::all()->keyBy('id');
        $userInvitedList = $workspace->userWorkspaceRoles;

        return view('user.workspaces.show', ['workspace' => $workspace, 'tasks' => $tasks, 'roles' => $roles, 'userInvitedList' => $userInvitedList]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
