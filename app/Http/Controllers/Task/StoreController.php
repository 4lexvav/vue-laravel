<?php

namespace App\Http\Controllers\Task;

use App\Task;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class StoreController extends TaskController
{
    /**
     * Display a list of all of the user's tasks.
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function execute(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name
        ]);

        return redirect('/');
    }
}
