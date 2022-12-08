<<<<<<< Updated upstream
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
        <button class="btn btn-outline-success btn-lg" id="rogout"onclick="location.href='./login_test.html'" >ログアウト</button>
    </header>

    <!--戻るボタン -->
    <div class="mdr">
    <a href="top3.php">戻る</a>
    </div>

<form action="cookie.php" method="post">
<div>
    <h2>検索結果</h2>
</div>
<input type="hidden" name="parameter_jiro">
<a href="cookie.php?parameter=1">博多病院</a>

</form>

<div class = "kensakukekka">
<?php

require_once 'DBmanager.php';
$dbmng = new DBmanager();
$userList = $dbmng->getUserTblByWord($_POST['kensaku-word']);
echo "<h1>検索ワード:". $_POST['kensaku-word']."　　　　　　検索結果：".count($userList)."件</h1>";//フリーワードと件数を表示

    if(count($userList) == 0 ){
        echo "<h2 class = a>検索結果がありません</h2>";
    }else{
        foreach($userList as $row){
        echo '<div class = "kekka1">';

                echo '<div class = "photo">';
                    echo  "<img src=./img/24636406_s.jpg width=200 height=200 >";
            echo  '</div>';

            
                echo '<div class = "hospital">';
                        echo '<form action="cookie.php" method="post">
                            <input type="hidden" name="parameter_jiro">'.
                        '<a href="cookie.php?parameter=1">'.$row['hospital_name']."</a><br></form>";
                echo '</div>';
            
            echo '<div class = "moji">';

            echo "<p>$row[medical_specialty]</p>";
            echo "<p>$row[hospital_address]</p>";
            echo "<p>$row[hospital_phone_number]</p>";
            echo'</div>';

        echo '</div>';

        }
    }


?>

</div>


</body>
</html>


<!-- =======
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
<!-- <header>
        <h1 class="rogo">
            <a href="">
                <img src="img/1_Primary_logo_on_transparent_267x69.png">
            </a>
        </h1>
        <button class="btn btn-outline-success btn-lg" id="rogout">ログアウト</button>
    </header> -->

    <!--戻るボタン -->
    <!-- <div class="mdr">
    <a href="top2.php">戻る</a>
    </div>

<?php

require_once 'DBManager.php';
$dbmng = new DBManager();
$userList = $dbmng->getHospitalTblByid($_POST['kensaku-word']);
echo "<h1>フリーワード:". $_POST['kensaku-word']."　　　　　　検索結果：".count($userList)."件</h1>";//フリーワードと件数を表示

    foreach($userList as $row){
        echo "-----------------------------------<br>";
        echo "$row[hospital_name]<br>";
    }



?>
</body>
</html>


>>>>>>> Stashed changes --> -->
