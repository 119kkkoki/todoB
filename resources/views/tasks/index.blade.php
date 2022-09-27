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
    <nav>
        <ul class="navbar">
            <li><a href="">Create</a></li>
            <li><a href="">Username</a></li>
        </ul>
    </nav>
  </header>

  <div class="content">

      <div class="content-image">
        <img src="写真" >
      </div>

      <div class="content-description">
        <h2>タイトル</h2>
        <p>中野は元気ですが何か？</p>
        
      </div>

     
        <svg class="bi" width="32" height="32" fill="currentColor">
          <use xlink:href="bootstrap-icons.svg#heart-fill"/>
        </svg>
   
      <a href="#">EDIT</a>
      <form action="#" method="post">
        <input type="submit" value="DELETE" onclick='return confirm("本当に削除しますか？");'>
      </form>
      
  </div>
</body>
</html> 