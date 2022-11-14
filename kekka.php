<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/hos_info.css">
    <title>Document</title>
</head>

<!-- ヘッダー -->
<header>
        <h1 class="rogo">
            <a href="">
                <img src="img/1_Primary_logo_on_transparent_267x69.png">
            </a>
        </h1>
        <button class="btn btn-outline-success btn-lg" id="rogout">ログアウト</button>
    </header>

    <!--戻るボタン -->
    <a href="top.php">戻る</a>
<!-- 検索結果表示 -->
<?php
echo "フリーワード:". $_POST[free_search]. "検索結果". $_POST[searchkey]."件";

$pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1417815-hosapo;charset=utf8','LAA1417815','Pass0411');

$sql = "SELECT * FROM hosapo_hospital_tbl  WHERE hospital_name  LIKE ? ORDER BY hospital_id  DESC";

$ps = $pdo->prepare($sql);
$ps->bindValue(1, "%" . $_POST['free_search'] . "%", PDO::PARAM_STR);
$ps->bindValue(2, "%" . $_POST['searchkey'] . "%", PDO::PARAM_STR);
$ps->execute();



?>
    
<body>
</body>
</html>