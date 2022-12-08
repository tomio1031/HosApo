  <!-- $test1 = $_GET['test1'];
    echo "入力された文字は".$test1."です"; -->
<!-- <?php
    if (isset($_COOKIE["date"])) {
        echo "日付".$_COOKIE["date"]."<br>";

    }
    echo $_POST['time']."<br>";

    if (isset($_COOKIE["specialty"])) {
        echo "診療科:".$_COOKIE["specialty"]."<br>";

    }

    if (isset($_COOKIE["hospitalid"])) {
        echo "病院番号:".$_COOKIE["hospitalid"]."<br>";

    }

?>   -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録確認画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/yoyaku_input.css">
</head>
<body>
    <header>
        <h1 class="rogo">
            <a href="">
                <img src="img/1_Primary_logo_on_transparent_267x69.png">
            </a>
    </header>

<div class="new-naiyo">
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

        foreach($searth  as $row){
                echo "病院名: $row[hospital_name] <br>";
        }
                echo "診療科:" . $specialty . "<br>";
                echo "受信者名:" . $_POST['name'] . "<br>";
                echo "予約日:" . $date ."<br>";
                echo "予約時間:" . $_POST['time'] ."<br>";           
    ?>
</div>
    <form action="yoyaku_comp.php" method="post">
        <button type="submit" class="btn btn-light rounded-pill btn-outline-dark">登録する</button>
    </form>
</body>
</html>