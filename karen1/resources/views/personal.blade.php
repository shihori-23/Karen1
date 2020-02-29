<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Suzuki Karen</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,600|Lato:400,700|Source+Sans+Pro:400,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/personal.css') }}">
        <script src="https://kit.fontawesome.com/0c0068477d.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="bg"></div>
        <header>
            <div class="main_title">
                <h1 class="txt">Suzuki Karen</h1>
            </div>
            <div class="nav_container pc">
                <ul class="nav">
                    <li class="nav_li"><a href="/">home</a></li>
                    <li class="nav_li active"><a class="disable" href="/about">about</a></li>
                    <li class="nav_li"><a href="/personalworks">personal works</a></li>
                    <li class="nav_li"><a href="works">works</a></li>
                    <li class="nav_li"><a href="contact">contact</a></li>
                </ul>
            </div>
            <a class="sf" id="menuBtn">
                <span>
                    <i class="fas fa-bars"></i>
                </span>  
            </a>
        </div>
        </header>
        <!-- スマホ用のメニュー -->
        <div class="sf_nav_container　sf" id="menu_bar">
            <ul class="sf_nav">
                <li class="nav_li"><a href="/">home</a></li>
                <li class="nav_li active"><a href="/about">about</a></li>
                <li class="nav_li"><a href="/personalworks">personal works</a></li>
                <li class="nav_li"><a href="works">works</a></li>
                <li class="nav_li"><a href="contact">contact</a></li>
            </ul>
            <a class="sf" id="closeBtn">
                <span>
                    <i class="fas fa-times"></i>
                </span>  
            </a>
        </div>  
        <div class="wrap">
            <div class="content1">
                <h2>ー personal works</h2>
            </div>
            <div class="content2">
                <div class="col_4">
                    <div class="img_wrap">
                        <img src="" alt="">
                    </div>
                    <div class="img_wrap">
                        <img src="" alt="">
                    </div>
                    <div class="img_wrap">
                        <img src="" alt="">
                    </div>
                    <div class="img_wrap">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>

    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script>

        //　ハンバーガーメニュー表示
        $("#menuBtn").on('click',function(){
            console.log("クリックしたよ");
            $('body').toggleClass('open');
            $('#menuBtn').toggleClass('none');
            // $('#closeBtn').toggleClass('none');
        });

        //　閉じるボタン
        $('#closeBtn').on('click',function(){
            $('body').toggleClass('open');
            $('#menuBtn').toggleClass('none');
            // $('#closeBtn').toggleClass('none');
        })

    </script>
    </body>
</html>

