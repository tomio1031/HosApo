<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/login_css.css">
</head>
<body>
    <header>
        <h1 class="rogo">
            <a href="">
                <img src="img/1_Primary_logo_on_transparent_267x69.png">
            </a>
        </h1>
    </header>

    
    <h2>病院予約ログイン</h2>
    <form  action="login.php" method="post">
    <div class = "username">

<label for="username">メールアドレス</label></th>

<input type="text" style="width: 150%; padding: 0px; font-size:25px;"  name="username"></td>

</div>

<div class = "password">

<label for="pass">パスワード</label>

<input type="text" style="width: 150%; padding: 0px; font-size:25px;"  name="password">

</div>

        <div class="btn">
            <button type="button" class="btn btn-light rounded-pill btn-outline-dark">ログイン</button>
        </div>

        <div class="user">
            <button type="button" class="btn btn-link">ユーザー名を忘れた方</button>
        
        
            <button type="button" class="btn btn-link">パスワードを忘れた方</button>
        
            <button type="button" class="btn btn-link">新規利用の方はこちら</button>
        
        </div>
        
    </form>
</body>
</html>