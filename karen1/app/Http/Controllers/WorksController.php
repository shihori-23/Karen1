<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use App\Work;
use App\WorkImage;

class WorksController extends Controller
{
    //
    public function index()
    {   
        $images = Work::orderBy('created_at','asc')->get();

        return view('post_works',[
            'images' => $images,
        ]);
    }

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
}
