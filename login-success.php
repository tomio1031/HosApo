<?php
   
$pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8','webuser','abccsd2');

$sql = "SELECT * FROM hosapo_user_tbl WHERE email_address = ? ";
$ps = $pdo->prepare($sql);
$ps->bindValue(1,$_POST['mail'],PDO::PARAM_STR);
$ps->execute();
$userData = $ps->fetchAll();

    foreach($userData as $row){
           if($_POST['pass'] == $row['password']){
            echo "ログインしました。5秒後にトップページへ移動します...";
            header('Refresh: 5; URL=http://localhost/web/HosApo/top3.php');
            }else{
            echo "パスワードが一致しません";
            }
    }

    if(count($userData)==0){
        echo "アカウントが存在しません";
    }
?>