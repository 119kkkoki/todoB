@extends('layouts.app_original')
@section('content')
 <a href="{{ route('tasks.create') }}">Create</a></li>
  <div class="body">
    <div class="content">
      @foreach($tasks as $task)
      <div class="content-description">
        <h3 class="card-body">中野の:{{ $task -> title}}</h3>
        <p class="card-text">中野は{{ $task -> contents }}</p>
      </div>
      <div class="card-image">
         <img src="{{ $task -> image_at }}" >{{--よくわからん --}}
      </div>
      <div class="card-data">
        投稿日時:{{ $task -> created_at }}
      </div>
      <div class="crad-btn">
      <a href="#" class="edit-btn">EDIT</a>
      <form action="#" method="post">
        <input class="delete-btn" type="submit" value="DELETE" onclick='return confirm("本当に削除しますか？");'>
      </form>
      </div>
      @endforeach
    </div>
  </div>
@endsection