<?php

namespace App\Http\Controllers;

use App\Models\HotNews;
use App\Models\Status;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hotNews = HotNews::with(['news'])->latest()->first();
        $hotNewsLimit = HotNews::with(['news'])->limit(3)->get();
        $newsLimit = Status::where('status', 'Post')->orderByDesc('created_at')->limit(3)->get();
        return view('home', compact('hotNews', 'hotNewsLimit', 'newsLimit'));
    }
}
