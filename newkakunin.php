<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録確認画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/newkakunin.css">
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
        if((isset($_POST["year"]))&&(isset($_POST["month"]))&&(isset($_POST["day"]))) {
            // セレクトボックスで選択された値を受け取る
            $birthday = $_POST["year"]."年".$_POST["month"]."月".$_POST["day"]."日";
        
            // 受け取った値を画面に出力
            
            };
        require_once "DBmanager.php";
        
        $dbm = new DBManager();
        $userList = $dbm->insertUserTbl
        ($_POST['password'], $_POST['name'],$_POST['namek'], $_POST['jyusho'],
        $_POST['tl'],$birthday,$_POST['gender'],$_POST['e-mailaddress']);
    
                
                echo "メールアドレス:" . $_POST['e-mailaddress'] . "<br>";
                echo "パスワード　　:" . $_POST['password'] . "<br>";
                echo "氏　名　　　　:" . $_POST['name'] . "<br>";
                echo "氏名(カタカナ):" . $_POST['namek'] . "<br>";
                echo "住所　　　　　:" . $_POST['jyusho']."<br>";
                echo "電話番号　　　:" . $_POST['tl'] . "<br>";
                echo "生年月日　　　:" . $birthday. "<br>";
                echo "性別　　　　　:" . $_POST['gender'] . "<br>";
    ?>
</div>
            <div class="button_solid019" onclick="location.href='./newmember.php'" >
                <a href="#">戻る</a>
            </div>
            <div class="button_solid020" onclick="location.href='./user_toroku_comp.html'">
                <a href="#">登録</a>
            </div>

</body>
</html>