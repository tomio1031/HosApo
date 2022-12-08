<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/hos_yoyaku_comp.css">
</head>
<body>
    <header>
        <h1 class="rogo">
            <a href="">
                <img src="img/1_Primary_logo_on_transparent_267x69.png">
            </a>
        </h1>
        <button class="btn btn-outline-success btn-lg" id="rogout">ログアウト</button>
    </header>

            <!-- フッター：再設定完了表示 -->
    <div class="container">
        
        <div class="main">

            <h1>◇予約内容確認</h1>
                
            <div class="yoyaku-naiyo">
            <?php
                if (isset($_COOKIE["specialty"])) {
                $specialty=$_COOKIE["specialty"];
                }

                if (isset($_COOKIE["hospitalid"])) {
                    $hospitalid=$_COOKIE["hospitalid"];
                }

                if (isset($_COOKIE["date"])) {
                    $date=$_COOKIE["date"];
                }
                    require_once "DBManager.php";
                    $dbm = new DBManager();
                    $userList = $dbm->insertApptbl($_POST['name'],$hospitalid,$specialty,$date,$_POST['time']);
                    $searth = $dbm->getUserTblByword($hospitalid);

<<<<<<< Updated upstream
            <div class="yoyaku-naiyo">
                    <h5 class="byoin-mei">・病　院　名　:
                        <?php foreach($searth  as $row){
                        echo "病院名: $row[hospital_name] <br>";
                        }
                        ?>
                    </h5>
                    <h5 class="jushinsyamei">・受診者名　　:</h5>
                    <h5 class="hiduke">・日　　　付　:</h5>
                    <h5 class="uketuke-time">・時　　　間　:</h5>
=======
                        echo '<h5 class="jushinsyamei">・診療科　　　:' . $specialty . '<br></h5>';
                        echo '<h5 class="jushinsyamei">・受診者名　　:' . $_POST['name'] . '<br></h5>';
                        echo '<h5 class="hiduke">・日　　　付　:'. $date .'<br></h5>';
                        echo '<h5 class="uketuke-time">・時　　　間　:'. $_POST['time'] .'<br></h5>';     
                    ?>
>>>>>>> Stashed changes
            </div>
            

            <h4 class="message">こちらの予約内容でお間違いないですか？</h4>

            <div class="button_solid019" onclick="location.href='./newmember.php'" >
                <a href="#">戻る</a>
            </div>
            <div class="button_solid020" onclick="location.href='./user_toroku_comp.html'">
                <a href="#">登録</a>
            </div>
        </div>
    </div>
</body>
</html>
