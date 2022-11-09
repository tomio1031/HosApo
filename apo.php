<?php
$filePath ='./img/1_Primary_logo_on_transparent_267x69.png'
$data=file_get_contents($filePath);
header('Content-type: img/png');
echo $data;
?>
    <!-- 病院名を表示 -->
    <?php 
    $name="mysql:host=db;dbname=dbname;charset=uft-8"
    ?>
    <h2>病院予約</h2>
    <p>診療科を選択してください</p>
    <!-- 診療科を表示 -->
    <?php
    $stmt=$db->prepare("SELECT FROM WHERE ")
    ?>
    <!--カレンダーを表示-->