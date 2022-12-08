<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/top3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>病院予約サイト ホスアポ</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1 class="rogo">
                <a href="">
                    <img src="img/1_Primary_logo_on_transparent_267x69.png">
                </a>
            </h1>
            <div class="logout">
                <button id="logout" class="btn btn-outline-success btn-lg" onclick="location.href='./login_test.php'">ログアウト</button>
            </div>
        </header>

        <div class="container">
            <div class="main">
                    <img class="gazou" src="img/24281318_m.jpg">
                <form action="kekka.php" method="post">
                    <!-- <div class="kensaku">
                        <input id="kensaku" type="search" class="form-control" placeholder="病院名" name="kensaku-word" required>
                    </div>
                    <div class="kensaku-btn">
                        <button id="kensaku-btn" class="btn btn-success"><i class="bi bi-search"></i></button>
                    </div> -->

                    <div class="kensaku">
                        <input id="kensaku" type="search" class="form-control" placeholder="病院名" name="kensaku-word" required>
                        <button id="kensaku-btn" class="btn btn-success"><i class="bi bi-search"></i></button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>