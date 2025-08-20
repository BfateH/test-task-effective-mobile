<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;
use App\Http\Resources\TaskMainResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return TaskMainResource::collection($tasks);
    }

    public function show(Task $task) {
        return TaskMainResource::make($task);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $task = Task::query()->create($data);
        $task->refresh();
        return TaskMainResource::make($task);
    }

    public function update(UpdateRequest $request, Task $task) {
        $data = $request->validated();
        $task->update($data);
        $task->refresh();
        return TaskMainResource::make($task);
    }

    public function destroy(Task $task) {
        $task->delete();

        return response()->json([
            'data' => [
                'message' => 'Task deleted successfully'
            ]
        ]);
    }
}
