<form action="cookie3.php" method="get">
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

    $link = '<a href="cookie3.php?date=' . $date . '">' . $day . '</a>';
    if ($today == $date) {
        $week .= '<td class="today">' . $link .'</td>';
    } else {
        $week .= '<td>' . $link . '</td>';
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
                margin-top:150px;
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
                text-align:center;
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
                position:fixed;
                width: 100vw;
                /* height: 134px; */
                height:134px;
                left: 0px;
                top: 0px;

                background: #FFFFFF;
                border-bottom: 3px solid #FFA500;
            }
            .rogo{
                position:absolute;
                width: 249px;
                height: 69px;
                left: 42px;
                top: 30px;
            }
            .logout{
                position: absolute;
                left: 79.58%;
                right: 2.01%;
                top: 38.81%;
                bottom: 20.15%;
                filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)) drop-shadow(0px 4px 8px rgba(47, 168, 79, 0.16));
            }
        </style>
    </head>
    <body>
        <header>
            <h1 class="rogo">
                <a href="./top3.php">
                    <img src="img/1_Primary_logo_on_transparent_267x69.png">
                </a>
            </h1>
            <div class="logout">
            <button id="logout" class="btn btn-outline-success btn-lg" onclick="location.href='./login_test.php'">ログアウト</button>
                </div>
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
        </form>
    </body>
    </html>