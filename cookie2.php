<?php
    setcookie("specialty", $_POST['specialty'], time() + 60 * 60 * 24 * 30);
    header("Location:test.php");
?>
