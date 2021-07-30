<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Video;
use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $alamat = User::where('id', Auth::user()->id)->first();
        $news = News::where('user_id', Auth::user()->id)->get()->count();
        $video = Video::where('user_id', Auth::user()->id)->get()->count();
        return view('dashboard.author.dashboard', compact('alamat', 'news', 'video'));
    }
}
