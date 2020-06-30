<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Karen Suzuki</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;1,200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,600|Lato:400,700|Source+Sans+Pro:400,600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,600|Lato:400,700|Source+Sans+Pro:400,600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans+JP:300,400|Raleway|Sawarabi+Gothic|Spartan&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300&display=swap" rel="stylesheet">        

        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/personal.css') }}">
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
                    <li class="nav_li"><a class="disable" href="/about">about</a></li>
                    <li class="nav_li active"><a class="active" href="/works">works</a></li>
                    <li class="nav_li"><a href="/personalworks">personal works</a></li>
                    <li class="nav_li"><a href="/contact">contact</a></li>
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
        <div class="sf_nav_container sf" id="menu_bar">
            <ul class="sf_nav">
                <li class="nav_li"><a href="/">home</a></li>
                <li class="nav_li"><a href="/about">about</a></li>
                <li class="nav_li active"><a href="works">works</a></li>
                <li class="nav_li"><a href="/personalworks">personal works</a></li>
                <li class="nav_li"><a href="contact">contact</a></li>
            </ul>
            <div class="sf none close_btn" id="closeBtn">
                <span class="line line--1"></span>
                <span class="line line--2"></span>
                <span class="line line--3"></span>
            </div>
        </div>  
        <div class="wrap">
            <div class="content1">
                <h2>- works</h2>
            </div>
            <div class="content2-1">
                <!-- <div class="col_4"> -->
                @foreach($images as $i)
                <div class="img_wrap2-1 animated hidden" data-animate="fadeIn">
                    <a href="/detail/works/{{$i->id}}" class="work_all_link">
                        <img src="{{ asset($i->file) }}" alt="personal_work">
                        <p class="work_all_title">{{$i->deteil}}</p>
                    </a>

                </div>
                @endforeach 
            </div>
        </div>

    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script>

        //　ハンバーガーメニュー表示
        $("#menuBtn").on('click',function(){
            console.log("クリックしたよ");
            $('body').toggleClass('open');
            // $('#menuBtn').toggleClass('none');
            $('#closeBtn').toggleClass('none');
        });

        //　閉じるボタン
        $('#closeBtn').on('click',function(){
            $('body').toggleClass('open');
            // $('#menuBtn').toggleClass('none');
            $('#closeBtn').toggleClass('none');
        })

        function toggleNav() {
            var body = document.body;
            var hamburger = document.getElementById('js-hamburger');

            hamburger.addEventListener('click', function() {
            body.classList.toggle('nav-open');
            });
        }
        toggleNav();

        $(window).on('load scroll', function(){

        //animatedのclassを持った要素をセレクタに指定
        var elem = $('.animated');

        elem.each(function () {

        //data属性からアニメーション名を取得
        var isAnimate = $(this).data('animate');
        //animated要素に位置を取得
        var elemOffset = $(this).offset().top;
        //現在のスクロールポジションを取得
        var scrollPos = $(window).scrollTop();
        //ウィンドウの高さを取得
        var wh = $(window).height();

        //animated要素がウィンドウ内の中央位置にきたら処理
        if(scrollPos > elemOffset - wh + (wh / 6)){
        $(this).addClass(isAnimate);
        $(this).removeClass("hidden");
        }
        });

    });

    </script>
    </body>
</html>

