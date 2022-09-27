<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>一覧</title>
    <link rel="stylesheet" href="{{asset('/asset/css/style.css') }}">
</head>

<body>
  <header>
    <div class="header-inner">
      <h2>やることアプリ</h2>
      <nav>
          <ul class="navbar">
              <li><a href="">Create</a></li>
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
         <img src="{{ $task -> image_at }}" >{{--よくわからん --}}
      </div>
      <div class="card-data">
        投稿日時:{{ $task -> created_at }}
      </div>
      @endforeach

      <div class="crad-btn">
      <a href="#" class="edit-btn">EDIT</a>
      <form action="#" method="post">
        <input class="delete-btn" type="submit" value="DELETE" onclick='return confirm("本当に削除しますか？");'>
      </form>
      </div>


  </div>
</div>
</body>
</html> 