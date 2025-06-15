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

        $user = $request->user();
        $userCreatedWorkspaces = $user->createdWorkspaces;
        $maxWorkspaceCapacity = 5; // check if user reach to the maximum capacity for making workspace

        if ($userCreatedWorkspaces->count() < $maxWorkspaceCapacity) {
            // add owner user to the workspace
            $ownerRole = Role::where('name', 'owner')->first(); // یا مقدار id مستقیم بنویس

            if (!$ownerRole) {
                return redirect()->back()->with('alertMessage', 'Role "Owner" is missing. Please seed your roles table first.');
            }

            $newWorkspace = Workspace::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'created_by' => Auth::id()
            ]);

            $newWorkspace->users()->attach($user->id, [
                'role_id' => $ownerRole->id, // if owner not exist set 1
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
        $user = Auth::user();
        $workspace = $user->createdWorkspaces->where('id', $id)->first();

        if (!$workspace) {
            abort(404, 'The page is not found.');
        }

        // eager load related models if needed
        $workspace->load(['tasks', 'userWorkspaceRoles', 'users']);

        // filter roles (exluding owner role)
        $roles = Role::all()
            ->filter(fn($role) => strtolower($role->name) !== 'owner')
            ->keyBy('id');

        // last opened workspace handled
        if ($workspace->users->contains($user->id)) {
            $workspace->users()->updateExistingPivot($user->id, [
                'last_opened_at' => now()
            ]);
        }

        return view('user.workspaces.show', compact('workspace', 'roles'))
            ->with([
                'tasks' => $workspace->tasks,
                'userInvitedList' => $workspace->userWorkspaceRoles
            ]);
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
