<?php

namespace App\Http\Controllers;

use App\Models\HotNews;
use App\Models\News;
use App\Models\Status;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index($slug)
    {
        $hotNewsLimit = HotNews::with(['news'])->limit(3)->get();
        $news = News::where('slug', $slug)->first();
        $newsLimit = Status::where('status', 'Post')->orderByDesc('created_at')->limit(3)->get();
        $newsLimitAll = Status::where('status', 'Post')->orderByDesc('created_at')->offset(3)->limit(12)->get();
        return view('view', compact('hotNewsLimit', 'news', 'newsLimit', 'newsLimitAll'));
    }
}
