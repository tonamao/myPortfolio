<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        return Content::all();
//        // DBよりContentテーブルの値を全て取得
//        $contents = Content::all();

//        // 取得した値をViewに渡す
//        return view('portfolio/admin', compact('contents'));
    }

//    public function edit($id)
//    {
//        // DBよりURIパラメータと同じIDをもつContentの情報を取得
//        $content = Content::findOrFail($id);
//
//        // 取得した値をビューに渡す
//        return view('portfolio/admin', compact('content'));
//    }
}
