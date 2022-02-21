<?php

namespace App\Http\Controllers;

use App\Models\Live;
use App\Models\Video;
use App\Models\HotNews;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LiveController extends Controller
{
    public function index()
    {
        $hotNewsLimit = HotNews::with(['news'])->limit(3)->get();
        $live = Live::first();
        // dd($live);
        $hotNewsLimit = HotNews::with(['news'])->limit(3)->get();
        $newVideos = Video::orderBy('created_at', 'desc')->limit(3)->get();
        $videoAll = Video::orderby('created_at', 'desc')->limit(30)->get();
        $topAdvertisement = Advertisement::where('awalTampil', Carbon::now()->format('Y-m-d'))->where('posisi', 'top')
        ->first();
        $leftAdvertisement = Advertisement::where('awalTampil', Carbon::now()->format('Y-m-d'))->where('posisi', 'left')
        ->first();
        $rightAdvertisement = Advertisement::where('awalTampil', Carbon::now()->format('Y-m-d'))->where('posisi', 'right')
        ->first();
        $middleAdvertisement = Advertisement::where('awalTampil', Carbon::now()->format('Y-m-d'))->where('posisi', 'middle')
        ->first();
        return view('live.live', compact('live','hotNewsLimit', 'hotNewsLimit', 'newVideos', 'videoAll', 'topAdvertisement', 'leftAdvertisement', 'rightAdvertisement', 'middleAdvertisement'));
    }

    public function show($slug)
    {
        $video = Video::where('slug', $slug)->first();
        $hotNewsLimit = HotNews::with(['news'])->limit(3)->get();
        $newVideos = Video::orderBy('created_at', 'desc')->limit(3)->get();
        $videoAll = Video::orderby('created_at', 'desc')->limit(30)->get();
        $topAdvertisement = Advertisement::where('awalTampil', Carbon::now()->format('Y-m-d'))->where('posisi', 'top')
        ->first();
        $leftAdvertisement = Advertisement::where('awalTampil', Carbon::now()->format('Y-m-d'))->where('posisi', 'left')
        ->first();
        $rightAdvertisement = Advertisement::where('awalTampil', Carbon::now()->format('Y-m-d'))->where('posisi', 'right')
        ->first();
        $middleAdvertisement = Advertisement::where('awalTampil', Carbon::now()->format('Y-m-d'))->where('posisi', 'middle')
        ->first();
        return view('live.view', compact('video', 'hotNewsLimit', 'newVideos', 'videoAll', 'topAdvertisement', 'leftAdvertisement', 'rightAdvertisement', 'middleAdvertisement'));
    }
}
