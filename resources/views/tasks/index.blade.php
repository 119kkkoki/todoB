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
  @foreach($tasks as $task)
  <div class="card">
    <div class="card-body">
      <h3 class="card-title">タイトル:{{ $task -> title}}</h3>
      <p class="card-contents">内容:{{ $task -> contents }}</p>
    </div>
    <img src="{{ asset($task->image_at) }}" class="card-image" alt="...">
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
</body>






  {{-- <header>
    <div class="header-inner">
      <h2>やることアプリ</h2>
      <nav>
          <ul class="navbar">
              <li><a href="{{ route('tasks.create') }}">Create</a></li>
              <li><a href="">Logout</a></li>
              <li>Username</li>
          </ul>
      </nav>
  </div>
  </header>
  <div class="body">
  <div class="content">
      @foreach($tasks as $task)
      <div class="content-description">
        <h3 class="card-body">中野の:{{ $task -> title}}</h3>
        <p class="card-text">中野は{{ $task -> contents }}</p>
      </div>
      <div class="card-image">
         <img src="{{ $task -> image_at }}" >{{--よくわからん --
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
</body>--}}

</html> 