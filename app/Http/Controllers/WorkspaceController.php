<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newArr = Workspace::all();
        return view('user.workspaces.index', ['workspaces' => $newArr]);
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
        $validator = $request->validate([
            'name' => 'required|string|max:255|unique:workspaces',
            'description' => 'nullable|string',
        ]);

        $newWorkspace = Workspace::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'created_by' => Auth::id()
        ]);

        return redirect()->back()->with('message', 'The new workspace is created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $workspace = Workspace::find($id);
        $tasks = $workspace->tasks;

        return view('user.workspaces.show', ['workspace' => $workspace, 'tasks' => $tasks]);
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
