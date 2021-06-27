<?php

namespace App\Http\Controllers;

use App\Models\HotNews;
use App\Models\News;
use App\Models\Status;
use Illuminate\Http\Request;

class HotNewsController extends Controller
{
    public function index()
    {
        $hotNewsLimit = HotNews::with(['news'])->limit(3)->get();
        $news = HotNews::all();
        return view('hotNews.hotNews', compact('hotNewsLimit', 'news'));
    }

    public function show($slug)
    {
        $hotNewsLimit = HotNews::with(['news'])->limit(3)->get();
        $news = News::where('slug', $slug)->first();
        $newsLimit = HotNews::orderByDesc('created_at')->limit(3)->get();
        $newsLimitAll = HotNews::orderByDesc('created_at')->offset(3)->limit(12)->get();
        return view('hotNews.view', compact('hotNewsLimit', 'news', 'newsLimit', 'newsLimitAll'));
    }
}
