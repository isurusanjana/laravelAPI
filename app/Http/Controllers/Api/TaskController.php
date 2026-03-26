<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\TaskResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Support\Facades\Cache;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tasks = Task::all();
        // Use the Cache facade to store the tasks for one hour
        $tasks = Cache::remember('tasks', 3600, function () {
            return Task::paginate(15);
        });
        return TaskResource::collection($tasks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'status' => 'required|in:pending,in_progress,completed',
        //     'due_date' => 'nullable|date',
        //     'priority' => 'required|integer|min:1|max:5',
        // ]);

        $task = $request->user()->tasks()->create($request->validated());
        return new TaskResource($task);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return response()->json($task);
    }  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        // $request->validate([
        //     'title' => 'sometimes|required|string|max:255',
        //     'description' => 'nullable|string',
        //     'status' => 'sometimes|required|in:pending,in_progress,completed',
        //     'due_date' => 'nullable|date',
        //     'priority' => 'sometimes|required|integer|min:1|max:5',
        // ]);

        $task->update($request->validated());
        return new TaskResource($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
