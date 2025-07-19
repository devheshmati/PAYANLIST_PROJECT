<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Workspace $workspace)
    {
        // Authorization
        $userRole = $workspace->userWorkspaceRoles()
            ->where('user_id', Auth::id())
            ->first()?->role?->name;

        if (!in_array($userRole, ['owner', 'admin'])) {
            abort(403, 'You have not access to create team in this workspace!');
        }

        // validate input
        $validator = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('teams')->where(function ($query) use ($workspace) {
                    return $query->where('workspace_id', $workspace->id);
                }),
            ]
        ]);

        // create the team
        $team = Team::create([
            'name' => $request->name,
            'workspace_id' => $workspace->id,
        ]);

        // return to back page with success message
        return back()->with('teamCreationSuccessMessage', 'The Team is created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
