<?php
date_default_timezone_set('Asia/Tokyo');

if(isset($_GET['ym'])){
    $ym=$_GET['ym'];
}else{
    $ym=date('Y-m');
}
$timestamp=strtotime($ym . '-01');
if($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}
$today = date('Y-m-j');
$html_title = date('Y年n月', $timestamp);
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
$day_count = date('t', $timestamp);
$youbi = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
$weeks = [];
$week = '';
$week .= str_repeat('<td></td>', $youbi);

for ( $day = 1; $day <= $day_count; $day++, $youbi++) {

    $date = $ym . '-' . $day;

    if ($today == $date) {
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';
    if ($youbi % 7 == 6 || $day == $day_count) {

        if ($day == $day_count) {
            $week .= str_repeat('<td></td>', 6 - $youbi % 7);
        }
        $weeks[] = '<tr>' . $week . '</tr>';

        $week = '';
    }
}
?>
    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <style>
            .container{
                font-family: 'Noto Sans JP', sans-serif;
                margin-top:80px;
            }
            h2{
                text-align:center;
            }
            h3{
                margin-bottom:30px;
                text-align:center;
            }
            th{
                height: 30px;
                text-aligin:center;
            }
            td{
                height:100px;
            }
            .today{
                background-color:orange !important;
            }
            th:nth-of-type(1),td:nth-of-type(1){
                color:red;
            }
            th:nth-of-type(7),td:nth-of-type(7){
                color:blue;
            }
            header{
                box-sizing: border-box;
                position: absolute;
                width: 1536px;
                /* height: 134px; */
                height:17%;
                left: 0px;
                top: 0px;

                background: #FFFFFF;
                border-bottom: 3px solid #FFA500;
            }
            .rogo{
                position: absolute;
                width: 249px;
                height: 69px;
                left: 42px;
                top: 30px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1 class="rogo">
                <a href="./top.php">
                    <img src="img/1_Primary_logo_on_transparent_267x69.png">
                </a>
            </h1>
            <button class="btn btn-outline-success btn-lg" id="rogout" onclick="location.href='./login.html'">ログアウト</button>
        </header>
        <div class="container">
        <h2>予約したい日時を選択してください</h2>
            <h3 class="mb-5"><a href="?ym=<?php echo $prev;?>">&lt;</a><?php echo $html_title;?><a href="?ym=<?php echo $next;?>">&gt;</a></h3>
            <table class="table table-bordered">
                <tr>
                    <th>日</th>
                    <th>月</th>
                    <th>火</th>
                    <th>水</th>
                    <th>木</th>
                    <th>金</th>
                    <th>土</th>
                </tr>
                <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
            </table>
        </div>
    </body>
    </html>