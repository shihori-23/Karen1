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
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300&display=swap" rel="stylesheet">        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/post.css') }}">
        <script src="https://kit.fontawesome.com/0c0068477d.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="bg"></div>
            <div class="main_title">
                <h1 class="txt">Karen Suzuki</h1>
            </div>
            <div class="wrap">
            <h2>Worksに詳細画像を追加します<br>※複数選択可能です</h2>
            <div class="content1">
                <form method="POST" action="/add/works" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$work_id}}">
                        <input type="file" name="photo">
                    <div>
                        <input type="submit" class="submit_btn">
                    </div>
                </form>
            </div>
            <!-- 画像保存が上手く行かなかった際のエラーメッセージ -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif

            <h2>プレビュー メイン画像</h2>
            <div class="content2">
            @if($images)
                <div class="personal_img">
                    <img src="{{ asset($images->file) }}" alt="サムネイル" class="personal_image">
                    <form method="POST" action="/edit/detail" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$work_id}}">
                        <input type="text" name="detail" value="{{$images->deteil}}" class="form_tilte-2">
                    <div>
                        <input type="submit" class="submit_btn" value="説明を変更">
                    </div>
                </form>
                </div>
            @endif
            </div>

            <h2>プレビュー 詳細画像</h2>
            <div class="content2">
            @if($detail_images)
                @foreach ($detail_images as $d)
                <div class="personal_img">
                    <img src="{{ asset($d->file) }}" alt="サムネイル" class="personal_image">
                    <form method="POST" action="/delete/image/{{$d->id}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div>
                        <input type="hidden" name="id" value="{{$work_id}}">
                        <input type="submit" class="submit_btn" value="削除">
                    </div>
                </form>
                </div>
                @endforeach
            @endif           
            </div>
        </div>

    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    </body>
</html>
