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

      <div class="content-image">
        <img src="写真" >
      </div>

      <div class="content-description">
        <h3>中野の本日</h3>
        <p>中野は元気ですが何か？君もきっと元気なのでしょう。もし、そうでなければ飴をあげます。</p>
      </div>

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