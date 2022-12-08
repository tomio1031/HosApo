<?php
    setcookie("specialty", $_POST['specialty'], time() + 60 * 60 * 24 * 30);
    header("Location:apo_1.php");
?>
