<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {

        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function edit(Request $request, $id)
    {

        $article = News::findOrFail($id);

        if($request->isMethod('GET'))
        {
            return view('news.edit', compact('article'));
        }

        if($request->isMethod('POST'))
        {
            dd($request);
        }
    }

    public function delete($id)
    {
        dd($id);
    }
}
