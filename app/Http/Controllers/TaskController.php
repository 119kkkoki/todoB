<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    { 
        $tasks = Task::all();      
        //dd($tasks);

        return view('tasks.index', ['tasks' =>$tasks]);
    }

    public function show($id)
    { 
        $tasks = Task::find($id);      

        return view('task.show', ['task' =>$task]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    function store(Request $request)
    {
        $task = new Task;
        $task -> title = $request -> title;
        $task -> contents = $request -> contents;

        $image_at = $request->file('image_at') -> store('public');
        $task -> image_at =str_replace('public/','',$image_at);

        $task -> user_id = Auth::id();
        $task -> save();

        return redirect()->route('tasks.index');
    }

    function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit',['task'=>$task]);
    }

    function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task -> title = $request -> title;
        $task -> contents = $request -> contents;
        $task -> save();
        return redirect()->route('tasks.index');
    }
    function destroy($id)
    {
        $task = Task::find($id);
        $task -> delete();
        return redirect()->route('tasks.index');
    }
}



