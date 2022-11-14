<?php
    +require_once 'DBManager.php';
    $dbmng = new DBManager();
    $userList = $dbmng->getUserTblByid($_POST['kensaku-word']);
    echo "<h2>ヒット件数：".count($userList)."件</h2><br>";
        foreach($userList as $row){
            echo "-----------------------------------<br>";
            echo "$row[hospital_name]<br>";
        }
?>