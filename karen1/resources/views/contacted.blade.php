<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Karen Suzuki</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;1,200&display=swap" rel="stylesheet">        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,600|Lato:400,700|Source+Sans+Pro:400,600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans+JP:300,400|Raleway|Sawarabi+Gothic|Spartan&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
        <script src="https://kit.fontawesome.com/0c0068477d.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="bg"></div>
        <header>
            <div class="main_title">
                <h1 class="txt">Karen Suzuki</h1>
            </div>
            <div class="nav_container pc">
                <ul class="nav">
                    <li class="nav_li"><a href="/">home</a></li>
                    <li class="nav_li"><a href="">about</a></li>
                    <li class="nav_li"><a href="/works">works</a></li>
                    <li class="nav_li"><a href="/personalworks">personal works</a></li>
                    <li class="nav_li active"><a class="active" href="/contact">contact</a></li>
                </ul>
            </div>
            <a class="sf" id="menuBtn">
                <div class="hamburger" id="js-hamburger">
                    <span class="hamburger__line hamburger__line--1"></span>
                    <span class="hamburger__line hamburger__line--2"></span>
                    <span class="hamburger__line hamburger__line--3"></span>
                </div>  
            </a>
        </div>
        </header>
        <!-- スマホ用のメニュー -->
        <div class="sf_nav_container　sf" id="menu_bar">
            <ul class="sf_nav">
                <li class="nav_li"><a href="/">home</a></li>
                <li class="nav_li"><a href="/about">about</a></li>
                <li class="nav_li"><a href="/works">works</a></li>
                <li class="nav_li"><a href="/personalworks">personal works</a></li>
                <li class="nav_li active"><a class="active" href="/contact">contact</a></li>
            </ul>
            <div class="sf none close_btn" id="closeBtn">
                <span class="line line--1"></span>
                <span class="line line--2"></span>
                <span class="line line--3"></span>
            </div>
        </div>

        <div class="wrap">
            <div class="content1">
                <h2>- contact</h2>
            </div>
            <p class="sended_message">
                お問い合わせいただき、ありがとうございます。<br>
                お返事まで数日いただく場合がございます。<br>
                よろしくお願いいたします。
            </p>
        </div>

    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script>

        //　ハンバーガーメニュー表示
        $("#menuBtn").on('click',function(){
            console.log("クリックしたよ");
            $('body').toggleClass('open');
            $('#menuBtn').toggleClass('none');
            $('#closeBtn').toggleClass('none');
        });

        //　閉じるボタン
        $('#closeBtn').on('click',function(){
            $('body').toggleClass('open');
            $('#menuBtn').toggleClass('none');
            $('#closeBtn').toggleClass('none');
        })

    </script>
    </body>
</html>

