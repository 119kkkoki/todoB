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

    public function create()
    {
        return view('tasks.create');
    }

    function store(Request $request)
    {
        $task = new Task;
        $task -> title = $request -> title;
        $task -> contents = $request -> contents;
        $task -> image_at = $request -> image_at;
        $task -> user_id = Auth::id();

        $task -> save();

        return redirect()->route('tasks.index');
    }


    function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit',['tasks'=>$task]);
    }

    function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task -> title = $request -> title;
        $task -> contents = $request -> contents;
        $task -> save();
        return view('tasks.index',['task'=>$task]);
    }
    function destroy($id)
    {
        $task = Task::find($id);
        $task -> delete();
        return redirect()->route('tasks.index');
    }
}



