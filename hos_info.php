<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/hos_info.css">
</head>
<body>
    <header>
        <h1 class="rogo">
            <a href="">
                <img src="img/1_Primary_logo_on_transparent_267x69.png">
            </a>
        </h1>
        <button class="btn btn-outline-success btn-lg" id="rogout">ログアウト</button>
    </header>

            <!-- フッター：予約完了表示 -->
    <div class="container">
        <div class="main">



<!-- イメージ画像 -->
            <div class="image">
                <img src="img/byoin_image.jpg"width="600" height="400">
            </div>


<!-- 〇〇〇〇病院 -->
            <div class="hos-info">
                <h2 class="hos-name">
                    <div class="icon-home">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0193 11.9846C13.0768 11.2752 13.2616 10.6012 13.5512 9.98462H6V12.4662L10 15.4969V42.0154H38V15.5321L42.5 12.5014V9.98462H24.4488C24.7384 10.6012 24.9232 11.2752 24.9807 11.9846H39.687L36 14.4678V40.0154H12V14.5031L8.67616 11.9846H13.0193Z" fill="#333333"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 26H16V30H20V26ZM14 24V32H22V24H14Z" fill="#333333"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M32 26H26V40H32V26ZM24 24V42H34V24H24Z" fill="#333333"/>
                        <path d="M6 41C6 41.5523 6.44772 42 7 42H41C41.5523 42 42 41.5523 42 41C42 40.4477 41.5523 40 41 40H7C6.44772 40 6 40.4477 6 41Z" fill="#333333"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 16H10V14H15V16Z" fill="#333333"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M37.5 16H23V14H37.5V16Z" fill="#333333"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25 12C25 15.3137 22.3137 18 19 18C15.6863 18 13 15.3137 13 12C13 8.68629 15.6863 6 19 6C22.3137 6 25 8.68629 25 12ZM20 9V11H22V13H20V15H18V13H16V11H18V9H20Z" fill="#333333"/>
                        </svg>
                    </div>

                    　〇〇〇〇病院</h2>
                <h4 class="hos-ka">〇〇科</h4>
            </div>


            
<!-- 受付ボタン -->
<div class="button_solid019">
    <a href="#">予約受付</a>
  </div>

<!-- 病院の紹介文 -->
        <div class="box">
            <p>テキテキストテキキストテキストテキストテキスト</p>
        </div>



<!-- /* 診療時間・休診日 */ -->
            <div class="hos-time">
                <h2 class="hos-kyushin-label">受診時間・休診日</h2>
                <h4 class="hos-kyushin-info-label">休診日:◯◯/◯◯</h4>
            </div>





<!-- /* 休診日テーブル */ -->
        <table class="kyushin" border="2">
            <tr>
                <th>　</th><th>　　　　　　　　</th><th>　</th>
                <th>　</th><th>日</th><th>　</th>
                <th>　</th><th>月</th><th>　</th>
                <th>　</th><th>火</th><th>　</th>
                <th>　</th><th>水</th><th>　</th>
                <th>　</th><th>木</th><th>　</th>
                <th>　</th><th>金</th><th>　</th>
                <th>　</th><th>土</th><th>　</th>
                <th>　</th><th>祝</th><th>　</th>
            </tr>

            <tr style="background-color:rgb(198, 219, 232);">
                <td>　</td><td>　　　　　　　　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
            </tr>


            <tr>
                <td>　</td><td>　　　　　　　　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
            </tr>


            <tr style="background-color:rgb(198, 219, 232);">
                <td>　</td><td>　　　　　　　　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
            </tr>

            
            <tr>
                <td>　</td><td>　　　　　　　　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
            </tr>

            <tr style="background-color:rgb(198, 219, 232);">
                <td>　</td><td>　　　　　　　　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
            </tr>

            <tr>
                <td>　</td><td>　　　　　　　　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
                <td>　</td><td>　</td><td class="waku">　</td>
            </tr>

        </table>



<!-- /* 診療時間詳細 */ -->
<div class="syousai">
    <h1 class="1"></h1>
    <h2 class="2"></h2>
</div>







<!-- /* 住所・地図 */ -->
            <div class="hos-jusyo">
                <div class="icon-zyusyo">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34 26C32.8948 26 32 26.8948 32 28C32 29.1052 32.8948 30 34 30C35.1052 30 36 29.1052 36 28C36 26.8948 35.1052 26 34 26ZM30 28C30 25.7902 31.7902 24 34 24C36.2098 24 38 25.7902 38 28C38 30.2098 36.2098 32 34 32C31.7902 32 30 30.2098 30 28Z" fill="#333333"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M28.2936 36.867C28.0106 37.1519 28 37.3082 28 37.3636V40H40V37.3636C40 37.3082 39.9894 37.1519 39.7064 36.867C39.4052 36.5637 38.9011 36.2325 38.2004 35.9263C36.788 35.3091 35.0608 35 34 35C32.9392 35 31.212 35.3091 29.7996 35.9263C29.0989 36.2325 28.5948 36.5637 28.2936 36.867ZM34 33C31.33 33 26 34.4618 26 37.3636V42H42V37.3636C42 34.4618 36.67 33 34 33Z" fill="#333333"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 38C15 38.5369 15.1801 39.0412 15.4974 39.3981C15.7984 39.7367 16.2714 40 17 40H26.9996L26.9999 42H17C15.7286 42 14.7016 41.5133 14.0026 40.7269C13.3199 39.9588 13 38.9631 13 38V33.0006L15 33V38Z" fill="#333333"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14 30.5858L19.7071 36.2929L18.2929 37.7071L14 33.4142L9.70711 37.7071L8.29289 36.2929L14 30.5858Z" fill="#333333"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 9C10 7.34315 11.3431 6 13 6H21C22.6569 6 24 7.34315 24 9V10H28V29H6V10H10V9ZM10 12H8V14H10V12ZM10 16H8V27H13V21H21V27H26V16H24V17C24 18.6569 22.6569 20 21 20H13C11.3431 20 10 18.6569 10 17V16ZM24 14H26V12H24V14ZM19 27V23H15V27H19ZM13 8C12.4477 8 12 8.44772 12 9V17C12 17.5523 12.4477 18 13 18H21C21.5523 18 22 17.5523 22 17V9C22 8.44772 21.5523 8 21 8H13ZM16 12V9H18V12H21V14H18V17H16V14H13V12H16Z" fill="#333333"/>
                        </svg>
                        
                </div>
                <h2 class="hos-jusyo-label">住所・地図</h2>
                <h4 class="hos-jusyo-info-label">◯県◯市◯-◯</h4>
            </div>




<!-- /* <受付ボタン */ -->
            <div class="button_solid01">
                <a href="#">予約受付</a>
            </div>
        </div>
    </div>





    <!-- /* 下の空白 */ -->
    <div class="void"></div>
</body>
</html>