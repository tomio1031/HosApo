<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/pass_change_comp.css">
</head>
<body>
        <div class = "unko">
            <img  src="img/1_Primary_logo_on_transparent_267x69.png">
        </div>

        <?php
            require_once "DBmanager.php";
            $dbm = new DBManager();
            $userList = $dbm->changeUserTblByword
            ($_POST['password'],$_POST['mail']);
        ?> 

        <!-- フッター：再設定完了表示 -->
    <div class="container">
        <div class="main">
            <h1>再設定が完了致しました</h1>
            <div class="btn">
            <button type="button" class="btn btn-light rounded-pill btn-outline-dark" onclick="location.href='./login_test.php'">ログイン画面へ</button>
            </div>
        </div>
    </div>

</body>
</html>