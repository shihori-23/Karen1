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
}
