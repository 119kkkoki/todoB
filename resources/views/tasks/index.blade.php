@extends('layouts.app_original')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do リスト</title>
    <link rel="stylesheet" href="{{ asset('/asset/css/style_koki.css') }}">
</head>

<body>

  <div class="create">
    <h1>今日は何をする？</h1>

    <div class="btn">
      <a href="{{ route('tasks.create') }}" class="create-btn">create</a>
    </div>
  </div>
  
<div class="nakano">
  @foreach($tasks as $task)
  <div class="card">
    <div class="card-body">
      <h3 class="card-title">タイトル:{{ $task -> title}}</h3>
      <p class="card-contents">内容:{{ $task -> contents }}</p>
    </div>
    <img src="{{ asset('storage/' . $task->image_at) }}" class="card-image" alt="...">
    <div class="card-data"> 
      投稿日時:{{ $task -> created_at }}
    </div>
    <div class="card-btn">
      <a href="{{ route('tasks.edit', $task->id) }}" class="edit-btn">EDIT</a>
      <form action="{{ route('tasks.destroy', $task->id)  }}" method="post">
        @csrf
        @method('delete')
        <input class="delete-btn" type="submit" value="DELETE" onclick='return confirm("本当に削除しますか？");'>
      </form>
    </div>
  </div>
  @endforeach
</div>

@endsection
</body>
</html> 

