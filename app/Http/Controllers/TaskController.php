<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getAllTasks()
    {
        // logic to get all Tasks goes here
    }

    public function createTask(Request $request)
    {
        $task = new Task;
        $task->title = $request->title;
        $task->content = $request->content;
        $task->save();

        return response()->json([
            "message" => "task record created"
        ], 201);
    }

    public function getTask($id)
    {
        // logic to get a Task record goes here
    }

    public function updateTask(Request $request, $id)
    {
        // logic to update a Task record goes here
    }

    public function deleteTask($id)
    {
        // logic to delete a Task record goes here
    }
}
