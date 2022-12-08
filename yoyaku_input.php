<!-- <form action="test3.php" method="get">
<?php
if (isset($_COOKIE["date"])) {
    echo "内容".$_COOKIE["date"]."<br>";
}
?>
<input type="submit" value="遷移">
</form>
<a href="test3.php?data=<?=$test1?>">$test1</a> -->


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/yoyaku...input.css">
    <style>
        button{
            display: inline-block;
            text-align:center;
        }
    </style>
</head>
<body>

<header>
        <h1 class="rogo">
            <a href="top3.php">
                <img src="img/1_Primary_logo_on_transparent_267x69.png">
            </a>
        </h1>
</header>

<form action="hos_yoyaku_comp.php" method="post">
<!-- <form action="yoyaku_inputcheck.php" method="post"> -->
<div name="maindiv" style="background: #98ed81; background-image: radial-gradient(rgb(255, 255, 255) 20%, transparent 20%), radial-gradient(#fff 20%, transparent 20%); background-size: 20px 20px; background-position: 0 0, 10px 10px;   font-size: 150%; "
    class="container">
	<div class="row ">
		<div class="text-brack text-center">
			<h1>予約情報登録画面</h1>
	    </div>
        <div class="form-floating">
            <p>予約日<p>
            <?php
            if (isset($_COOKIE["date"])) {
                echo $_COOKIE["date"];
            }
            ?>
        </div> 

        <div class="form-floating">
            <p>受診者名</p>
			<input type="text" class="form-control" id="txt1-1" name = "name"
				placeholder="名前">
		</div>

        <div class="form-floating">
            <p>電話番号</p>
			<input type="text" class="form-control" id="tl" name="tl"
				placeholder="(例000-000-0000)">
		</div>

        <div class="form-floating">
            <p>メールアドレス</p>
			<input type="text" class="form-control" id="mail" name="mail"
				placeholder="aaaaaa@asojuku.ac.jp">
		</div>
        <div>
            <!-- <p>時間<p>
                <?php
                    $str="<select>\n";
                    foreach(range(mktime(10,0,0,0,0,0),mktime(16,0,0,0,0,0),60*30) as $val){
                      $str.="<option value=\"".date('H:i',$val)."\">".date('H:i',$val)."</option>\n";
                    }
                    $str.="</select>\n";
                    echo "<pre>";
                    echo ($str);
                    ?> -->
            <label for="sei">時間</label><br>
                <select name="time">
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">12:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                    <option value="14:00">14:00</option>
                    <option value="14:30">14:30</option>
                    <option value="15:00">15:00</option>
                    <option value="15:30">15:30</option>
                    <option value="16:00">16:00</option>
            </select>
        </div>
	</div>	
</div>
    <div align="center">
        <button type="submit" class="btn rounded-pill btn-outline-dark" id="btn">登録する</button>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>