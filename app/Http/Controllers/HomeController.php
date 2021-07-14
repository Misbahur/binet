<?php

namespace App\Http\Controllers;

use App\Models\HotNews;
use App\Models\Status;
use App\Models\Video;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $hotNews = HotNews::with(['news'])->latest()->first();
        $hotNewsLimit = HotNews::with(['news'])->limit(3)->get();
        $newsLimit = Status::where('status', 'Post')->orderByDesc('created_at')->limit(3)->get();
        $newsLimitAll = Status::where('status', 'Post')->orderByDesc('created_at')->offset(3)->limit(30)->get();
        $videos = Video::orderByDesc('created_at')->limit(6)->get();
        $topAdvertisement = Advertisement::where('awalTampil', Carbon::now()->format('Y-m-d'))->where('posisi', 'top')
        ->first();
        $leftAdvertisement = Advertisement::where('awalTampil', Carbon::now()->format('Y-m-d'))->where('posisi', 'left')
        ->first();
        $rightAdvertisement = Advertisement::where('awalTampil', Carbon::now()->format('Y-m-d'))->where('posisi', 'right')
        ->first();
        $middleAdvertisement = Advertisement::where('awalTampil', Carbon::now()->format('Y-m-d'))->where('posisi', 'middle')
        ->first();
        return view('home', compact('hotNews', 'hotNewsLimit', 'newsLimit', 'newsLimitAll', 'videos', 'topAdvertisement', 'leftAdvertisement', 'rightAdvertisement', 'middleAdvertisement'));
    }
}
