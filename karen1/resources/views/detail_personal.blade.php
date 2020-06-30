<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Karen Suzuki</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;1,200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,600|Lato:400,700|Source+Sans+Pro:400,600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans+JP:300,400|Raleway|Sawarabi+Gothic|Spartan&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300&display=swap" rel="stylesheet">        
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/personal.css') }}">
        <script src="https://kit.fontawesome.com/0c0068477d.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
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
                    <li class="nav_li"><a href="/about">about</a></li>
                    <li class="nav_li"><a href="/works">works</a></li>
                    <li class="nav_li active"><a class="active" href="/personalworks">personal works</a></li>
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
        <div class="sf_nav_container　sf" id="menu_bar">
            <ul class="sf_nav">
                <li class="nav_li"><a href="/">home</a></li>
                <li class="nav_li"><a href="/about">about</a></li>
                <li class="nav_li"><a href="works">works</a></li>
                <li class="nav_li active"><a href="/personalworks">personal works</a></li>
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
                <h2>- personal works</h2>
            </div>

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($images as $i)
                    <div class="swiper-slide"><img src="{{asset($i->file)}}" alt="personalworks詳細画像" class="swiper-img"></div>
                    @endforeach
                </div>
                <!-- <div class="swiper-pagination"></div> -->
                <div class="swiper-button-prev swiper-button-white"></div>
                <div class="swiper-button-next swiper-button-white"></div>
            </div>
            <div class="nav_all_works">
                <a href="/personalworks">一覧に戻る</a>
            </div>

        </div>

    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script>
    var mySwiper = new Swiper ('.swiper-container', {
        loop: true,
        slidesPerView: 3,
        spaceBetween: 32,
        centeredSlides: true,
        autoHeight: true,
        // effect: 'fade',
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
        },
        //         breakpoints: {
        //     767: {
        //         slidesPerView: 1,
        //         spaceBetween: 0
        //     }
        // },
    })

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
        if(scrollPos > elemOffset - wh + (wh / 8)){
            $(this).addClass(isAnimate);
            $(this).removeClass("hidden");
        }
        });

        });

    </script>
    </body>
</html>

