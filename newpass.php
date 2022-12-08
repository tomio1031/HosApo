<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パスワード再設定</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/newpass.css">
</head>
<body>
    
    <header>
        <h1 class="rogo">
                <img src="img/1_Primary_logo_on_transparent_267x69.png">
        </h1>
    </header>
<h2>パスワード再設定</h2>
<form action="pass_change_comp.php" method="post">
<table>
    <div class = "username">
        <label for="username">メールアドレス</label></th>
        <input type="text" style="width: 150%; padding: 0px; font-size:25px;"  name="mail"></td>
    </div>
    <div class = "password">
        <label for="pass">再設定するパスワード</label>
        <input type="password" style="width: 150%; padding: 0px; font-size:25px;"  name="password">
    </div>
    <div class = "passk">
        <label for="passk">再設定するパスワード(確認用)</label>
        <input type="password" style="width: 150%; padding: 0px; font-size:25px;" name="passk">
    </div>
</table>
<input type="submit" value="登録">
</form>
</body>
</html>
