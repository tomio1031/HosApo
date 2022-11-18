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
    </style>
</head>
<body>

<header>
        <h1 class="rogo">
            <a href="">
                <img src="img/1_Primary_logo_on_transparent_267x69.png">
            </a>
        </h1>
    </header>
<div name="maindiv" style="background: #98ed81; background-image: radial-gradient(rgb(255, 255, 255) 20%, transparent 20%), radial-gradient(#fff 20%, transparent 20%); background-size: 20px 20px; background-position: 0 0, 10px 10px;   font-size: 150%; "
    class="container">
	<div class="row ">
		<div class="text-brack text-center">
			<h1>予約情報登録画面</h1>
	    </div>

        <div class="form-floating">
            <p>受信者名</p>
			<input type="text" class="form-control" id="txt1-1"
				placeholder="asoaso@asojuku.ac.jp">
		</div>

        <div class="form-floating">
            <p>電話番号</p>
			<input type="text" class="form-control" id="tl"
				placeholder="asoaso@asojuku.ac.jp">
		</div>

        <div class="form-floating">
            <p>メールアドレス</p>
			<input type="text" class="form-control" id="mail"
				placeholder="asoaso@asojuku.ac.jp">
		</div>

        <div class="form-floating">
            <p>日付</p><br>    
            <select name="month">
                <option value="">-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>　月

            <select name="day">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
            </select>　日
        </div>  
  
	</div>	
</div>
        <div class="form-floating">
            
                <button type="button" class="btn rounded-pill btn-outline-dark" id="btn">登録する</button>
            
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>