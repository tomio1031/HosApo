<!-- <form action="test.php" method="post"> -->
<?php
    // クッキーを送信（有効期限30日）
    //setcookie("login_id", $_POST['test'], time() + 60 * 60 * 24 * 30);
    //header("Location:test2.php");

    // setcookie("login_id", $time, time() + 60 * 60 * 24 * 30);
    // header("Location:yoyaku_inputcheck.php");

    // setcookie("login_id", $_POST['test'], time() + 60 * 60 * 24 * 30);
    // header("Location:yoyaku_inputcheck.php");

    // setcookie("login_id", $_POST['test'], time() + 60 * 60 * 24 * 30);
    // header("Location:yoyaku_inputcheck.php");
    
    setcookie("date", $_GET['date'], time() + 60 * 60 * 24 * 30);
    header("Location:yoyaku_input.php");

    // setcookie("date", $_POST['time'], time() + 60 * 60 * 24 * 30);
    // header("Location:test3.php");
    


?>
<!-- <input type="submit" value="遷移">
</form> -->
