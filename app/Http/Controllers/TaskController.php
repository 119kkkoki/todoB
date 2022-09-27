<?php

use App\Post;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    { 
        return view('tasks.index');
    }

    function store(Request $request)
    { 
        // dd($request);
        // $requestに入っている値を、 new Postでデータベースに保存するという記述
        $task = new Post;
        //左辺:テーブル。右辺が送られてきた値（formから送られてきたnameが入っている）
        $task -> title = $request -> title;
        $task -> body = $request -> body;
        $task -> user_id = Auth::id();

        $task -> save();

        return redirect()->route('tasks.index');
    }

    function edit($id)
    { 
       $task = Post::find($id);
        return view('tasks.edit',['task'=>$task]);
    }

    function destroy($id)
    { 
       $task = Post::find($id);
       $task->delete();
       return redirect()->route('task.index');
    }
}
