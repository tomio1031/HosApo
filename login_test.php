<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>病院予約サイト　ホスアポ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/login_test.css">
</head>
<body>
    <div class="rogo">
        <img src="img/1_Primary_logo_on_transparent_267x69.png">
    </div>
    <div class="login-moji">ログイン</div>
    <div class="card">
        <form action="login-success.php" method="post">
            <div class="mail-moji">メールアドレス</div>
            <input class="mail" type="text" name="mail" required>
            <div class="pass-moji">パスワード</div>
            <input class="pass" type="text" name="pass" required>
            <button id="login" class="btn btn-outline-success btn-lg">ログイン</button>
            <button id="cant-login" type="button" class="btn btn-link" onclick="location.href='./newpass.html'">ログインできない方はこちら</button>
        </form>
        </div>
    <div class="acount-mottenai">アカウントを持っていませんか？</div>
    <button id="acount-sakusei" type="button" class="btn btn-link" onclick="location.href='./newmember.php'">アカウント作成</button>
</body>
</html>