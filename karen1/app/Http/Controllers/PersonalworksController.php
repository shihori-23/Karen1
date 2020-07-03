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

    //【管理画面】並び替え 前へ
    public function prevData($id)
    {   
        $pushData = Personalwork::where('id','=',$id)->first();
        $sort = $pushData->sort;
        $allData = Personalwork::where('sort','<=',$sort)->orderBy('sort','desc')->get();

        //　並び替える元のデータ
        $nowData = $allData[0];
        $nowId = $nowData->id;
        $nowSort = $nowData->sort;

        //　１つ前のデータ
        $prevData = $allData[1];
        $prevId = $prevData->id;
        $prevSort = $prevData->sort;

        $nowDataSave = Personalwork::where('id','=',$nowId)->first();
        $nowDataSave->sort = $prevSort;
        $nowDataSave->save();

        $prevDataSave = Personalwork::where('id','=',$prevId)->first();
        $prevDataSave->sort = $nowSort;
        $prevDataSave->save();

        return redirect('post_personalworks');
    }

    //【管理画面】並び替え　次へ
    public function nextData($id)
    {   
        $pushData = Personalwork::where('id','=',$id)->first();
        $sort = $pushData->sort;
        $allData = Personalwork::where('sort','>=',$sort)->orderBy('sort','asc')->get();

        //　並び替える元のデータ
        $nowData = $allData[0];
        $nowId = $nowData->id;
        $nowSort = $nowData->sort;

        //　１つ前のデータ
        $nextData = $allData[1];
        $nextId = $nextData->id;
        $nextSort = $nextData->sort;

        $nowDataSave = Personalwork::where('id','=',$nowId)->first();
        $nowDataSave->sort = $nextSort;
        $nowDataSave->save();

        $nextDataSave = Personalwork::where('id','=',$nextId)->first();
        $nextDataSave->sort = $nowSort;
        $nextDataSave->save();

        return redirect('post_personalworks');
    }


}
