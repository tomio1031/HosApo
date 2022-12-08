<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kekka.css">
    <title>Document</title>
</head>
    
<body>
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
    <div class="mdr">
    <a href="top3.php">戻る</a>
    </div>


<?php

require_once 'DBManager.php';
$dbmng = new DBManager();
$userList = $dbmng->getUserTblByid($_POST['kensaku-word'],$_POST['hospital_name'],$_POST['hospital_address'],$_POST['hospital_phone_number'],$_POST['medical_specialty']);
echo "<div class = 'kensakukekka'><h1>検索ワード:". $_POST['kensaku-word']."　　　　　　検索結果：".count($userList)."件</h1>";//フリーワードと件数を表示
echo "<\div>"
    foreach($userList as $row){
        echo "<div> <img src='./img/24636406_s.jpg'>";
        echo "$row[hospital_name]<br>";
        echo "$row[hospital_address]<br>";
        echo "$row[hospital_phone_number]<br>";
        echo "$row[medical_specialty]<br>";
        echo "</div>";
        
    }


?>



</body>
</html>


