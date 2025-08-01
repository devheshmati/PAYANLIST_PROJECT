<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        /*$allTasks = $task->all();*/
        /*return view('user.tasks.index', ['tasks' => $allTasks]);*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Workspace $workspace)
    {
        /*$workspace = Workspace::find($workspace_id);*/
        $validator = $request->validate(
            [
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('tasks')->where(
                    function ($query) use ($workspace) {
                        return $query->where('workspace_id', $workspace->id);
                    }
                )
            ],
            'description' => 'nullable|string',
            'priority' => 'required|string',
            'score' => "required|string",
            ]
        );

        $newTask = Task::create(
            [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'created_by' => Auth::id(),
            'workspace_id' => $workspace->id,
            'priority' => $request->input('priority'),
            'status' => 'todo',
            'score' => $request->input('score')
            ]
        );

        return redirect()->back()->with('message', 'New Task is create!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $getTask = Task::find($id);
        return view('user.tasks.show', ['task' => $getTask]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workspace $workspace, Task $task)
    {
        return view('user.tasks.edit', ['workspace' => $workspace, 'task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workspace $workspace, Task $task)
    {
        if($task->workspace->id !== $workspace->id) {
            abort(403, "Not match Workspace!");
        }

        if($request->user()->id !== $workspace->created_by) {
            abort(403, "Unauthorized!");
        }

        $validator = $request->validate(
            [
            'title' => 'string|max:255',
            'description' => 'nullable|string|max:1000'
            ]
        );


        $task->update($validator);

        return back()->with('success', "Task is updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Workspace $workspace, Task $task)
    {
        if($task->workspace_id !== $workspace->id) {
            abort(403, "This task not belong to this workspace");
        }

        if($workspace->created_by !== $request->user()->id) {
            abort(403, "Unauthorized action.");
        }

        $task->delete();

        return back()->with('message', "Task deleted successfully!");
    }

    public function updateStatus(Request $request, Workspace $workspace, Task $task)
    {
        $request->validate(
            [
            'status' => 'required|in:todo,in_progress,done'
            ]
        );

        if ($task->workspace_id !== $workspace->id) {
            abort(403, 'Unauthorized action.');
        }

        $task->status = $request->status;
        $task->save();

        return response()->json(['message' => 'Task status updated successfully']);
    }
}
