<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Http\Response;

class DestroyController extends TaskController
{
    /**
     * Destroy the given task.
     *
     * @param Request $request
     * @param Task    $task
     *
     * @return Response
     */
    public function execute(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/');
    }
}
