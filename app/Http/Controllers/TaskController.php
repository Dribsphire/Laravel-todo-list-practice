<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    public function store(Request $request)
    {
        Task::create([
            'title' => $request->title
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect('/');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->title = $request->title;
        $task->save();

        return redirect('/');
    }

}

