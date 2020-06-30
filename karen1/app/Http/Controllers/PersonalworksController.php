<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use App\Personalwork;

class PersonalworksController extends Controller
{
    //投稿画面でのプレビュー用
    public function index()
    {   
        $images = Personalwork::orderBy('sort','asc')->get();

        return view('post_personalworks',[
            'images' => $images,
        ]);
    }

    public function store(ImageRequest $request)
    {
        $posts = new Personalwork;
        $id = Personalwork::count();
        $sort_id= ($id + 1) *10;
        $timeStamp = time();
        $fileName = $timeStamp.'.jpg';
        $file = "personal_img/".$fileName;

        $posts->file = $request->photo->store('public/personal_img');
        //保存される名前を決める
        $posts->file = str_replace('public/', 'storage/', $posts->file);

        $posts->sort = $sort_id;
        $posts->save();

        $images = Personalwork::orderBy('sort','asc')->get();

        return redirect('post_personalworks');
    }

    //一覧表示用
    public function getData()
    {   
        $images = Personalwork::orderBy('sort','asc')->get();

        return view('personal',[
            'images' => $images,
        ]);
    }

    //削除
    public function delete($id)
    {   
        Personalwork::find($id)->delete();

        return redirect('post_personalworks');
    }

    //詳細ページ　スライダー表示用
    public function getDetailData()
    {   
        $images = Personalwork::orderBy('sort','asc')->get();

        return view('detail_personal',[
            'images' => $images,
        ]);
    }


}
