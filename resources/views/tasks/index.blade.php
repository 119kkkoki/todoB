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
  <div>
    <form action="{{ route('tasks.index') }}" method="GET">
      <input type="text" name="keyword" value="{{ $keyword }}">
      <input type="submit" value="検索">
    </form>
  </div>

  <div class="create">
    {{-- <h1 class="index-title">今日は何をするの？</h1> --}}
    <div class="btn">
      <a href="{{ route('tasks.create') }}" class="create-btn">>>♡何やるの？を追加♡</a>
    </div>
  </div>
  

<div class="wrapper">
  @foreach($tasks as $task)
  <div class="card">
    <div class="card-title">
      <h3 class="card-title">何やる？:{{ $task -> title}}</h3>
    </div>

    <img src="{{ asset('storage/' . $task->image_at) }}" class="card-image" alt="...">
    
    <div class="card-detail">
    <p class="card-contents">内容:{{ $task -> contents }}</p>
    
    <div class="card-data"> 
      DATE:{{ $task -> created_at }}
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
</div>
  @endforeach
</div>


@endsection
</body>
</html> 

