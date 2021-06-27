<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\HotNews;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $hotNewsLimit = HotNews::with(['news'])->limit(3)->get();
        $videos = Video::all();
        return view('video.video', compact('hotNewsLimit', 'videos'));
    }

    public function show($slug)
    {
        $video = Video::where('slug', $slug)->first();
        $hotNewsLimit = HotNews::with(['news'])->limit(3)->get();
        $newVideos = Video::orderBy('created_at', 'desc')->limit(3)->get();
        $videoAll = Video::orderby('created_at', 'desc')->limit(30)->get();
        return view('video.view', compact('video', 'hotNewsLimit', 'newVideos', 'videoAll'));
    }
}
