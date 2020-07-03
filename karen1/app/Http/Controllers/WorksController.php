<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use App\Work;
use App\WorkImage;

class WorksController extends Controller
{
    // 【表示画面】Work 一覧表示
    public function getAllWorksData()
    {   
        $images = Work::orderBy('created_at','asc')->get();

        return view('work',[
            'images' => $images,
        ]);
    }
    
    //　【管理画面】
    // Work 投稿画面でのプレビュー表示様
    public function index()
    {   
        $images = Work::orderBy('created_at','asc')->get();

        return view('post_works',[
            'images' => $images,
        ]);
    }

    //Work 投稿
    public function store(ImageRequest $request)
    {
        $posts = new Work;
        $id = Work::count();
        $sort_id= ($id + 1) *10;

        $posts->file = $request->photo->store('public/work_img');
        //保存される名前を決める
        $posts->file = str_replace('public/', 'storage/', $posts->file);

        $posts->deteil = $request->title;
        $posts->save();

        return redirect('post_works');
    }

    // Works　詳細ページ　画面表示用のデータの取得
    public function getData($id)
    {   
        $images = Work::where('id','=',$id)->first();

        $detailImages = WorkImage::where('work_id','=',$id)->orderBy('id','asc')->get();

        return view('add_works',[
            'images' => $images,
            'work_id' => $id,
            'detail_images' => $detailImages
        ]);
    }
    // Works　詳細ページ　画像の追加
    public function postData(ImageRequest $request)
    {

        $posts = new WorkImage;
        $id = $request->id;
        $posts->file = $request->photo->store('public/work_detail_img');
        $posts->file = str_replace('public/', 'storage/', $posts->file);
        $posts->work_id = $id;
        $posts->save();

        return redirect()->action('WorksController@getData',['id' => $id]);
    }
    // Works　一覧ページ削除
    public function delete($id)
    {   
        Work::where('id','=',$id)->delete();
        WorkImage::where('work_id','=',$id)->delete();

        return redirect('post_works');
    }

    // Works　詳細ページ　画像の削除
    public function deleteDetail($id)
    {   
        $workId = WorkImage::where('id','=',$id)->first()->work_id;
        WorkImage::find($id)->delete();

        return redirect()->action('WorksController@getData',['id' => $workId]);
    }

    // Works　詳細ページ　説明文の更新
    public function updateData(Request $request)
    {
        $id = $request->id;
        $item = Work::where('id', '=',$id)->first();
        $item->deteil = $request->detail;
        $item->save();

        return redirect()->action('WorksController@getData',['id' => $id]);
    }

    // 【表示画面】
    //詳細ページ　スライダー表示用
    public function getDetailData($id)
    {   
        $mainImage = Work::where('id','=',$id)->first();
        $images = WorkImage::where('work_id','=',$id)->orderBy('id','asc')->get();
        $minId =  Work::orderBy('id','asc')->take(1)->get();
        $maxId =  Work::orderBy('id','desc')->take(1)->get();

        return view('detail_work',[
            'images' => $images,
            'mainImage' => $mainImage,
            'minId' => $minId,
            'maxId' => $maxId,
        ]);
    }

    //詳細ページ 前のページに戻る
    public function getPrevDetailData($id)
    {   
        $allData = Work::where('id','<=',$id)->orderBy('id','desc')->get();
        $mainImage = $allData[1];
        $prevId = $mainImage->id;

        $images = WorkImage::where('work_id','=',$prevId)->orderBy('id','asc')->get();
        $minId =  Work::orderBy('id','asc')->take(1)->get();
        $maxId =  Work::orderBy('id','desc')->take(1)->get();

        return view('detail_work',[
            'images' => $images,
            'mainImage' => $mainImage,
            'minId' => $minId,
            'maxId' => $maxId,
        ]);
    }
    //詳細ページ　次のページに戻る
    public function getNextDetailData($id)
    {   
        $allData = Work::where('id','>=',$id)->orderBy('id','asc')->get();
        $mainImage = $allData[1];
        $nextId = $mainImage->id;

        $images = WorkImage::where('work_id','=',$nextId)->orderBy('id','asc')->get();
        $minId =  Work::orderBy('id','asc')->take(1)->get();
        $maxId =  Work::orderBy('id','desc')->take(1)->get();

        return view('detail_work',[
            'images' => $images,
            'mainImage' => $mainImage,
            'minId' => $minId,
            'maxId' => $maxId,
        ]);
    }
}
