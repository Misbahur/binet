<?php

namespace App\Http\Controllers;

use App\Models\HotNews;
use App\Models\News;
use Illuminate\Http\Request;

class NewsSportController extends Controller
{
    public function index()
    {
        $hotNewsLimit = HotNews::with(['news'])->limit(3)->get();
        $news = News::where('kategori', 'Sports')->get();
        return view('sports.sports', compact('hotNewsLimit', 'news'));
    }

    public function show($slug)
    {
        $hotNewsLimit = HotNews::with(['news'])->limit(3)->get();
        $news = News::where('slug', $slug)->first();
        $newsLimit = News::where('kategori', 'Sports')->orderByDesc('created_at')->limit(3)->get();
        $newsLimitAll = News::where('kategori', 'Sports')->orderByDesc('created_at')->offset(3)->limit(12)->get();
        return view('sports.view', compact('hotNewsLimit', 'news', 'newsLimit', 'newsLimitAll'));
    }
}
