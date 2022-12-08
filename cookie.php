<?php
    // クッキーを送信（有効期限30日）
    setcookie("specialty", $_POST['specialty'], time() + 60 * 60 * 24 * 30);
    header("Location:apo_1.php");

    setcookie("hospitalid", $_GET['parameter'], time() + 60 * 60 * 24 * 30);
    header("Location:nyuuryoku2.php");
?>
