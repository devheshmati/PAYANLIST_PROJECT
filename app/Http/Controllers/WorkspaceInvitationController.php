<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserWorkspaceRole;
use App\Models\Workspace;
use Illuminate\Http\Request;

class WorkspaceInvitationController extends Controller
{
    public function invite(Request $request, Workspace $workspace)
    {
        // validation
        $request->validate([
            'email' => 'required|string',
            'role_id' => 'required|exists:roles,id'
        ]);

        // Find user by username or email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['userError' => 'User not found!']);
        }

        // check if user already exists in workspace
        $exists = UserWorkspaceRole::where('user_id', $user->id)
            ->where('workspace_id', $workspace->id)
            ->exists();

        if ($exists) {
            return back()->withErrors(['userError' => 'User is already a member of this workspace']);
        }

        UserWorkspaceRole::create([
            'user_id' => $user->id,
            'workspace_id' => $workspace->id,
            'role_id' => $request->role_id
        ]);

        return back()->with('successMessage', 'User invited successfully!');
    }
}
