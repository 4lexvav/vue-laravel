<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\TaskController;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends TaskController
{
    /**
     * @var TaskRepository
     */
    private $tasks;

    /**
     * IndexController constructor.
     *
     * @param TaskRepository $tasks
     */
    public function __construct(TaskRepository $tasks)
    {
        parent::__construct();

        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's tasks.
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function execute(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user())
        ]);
    }
}
