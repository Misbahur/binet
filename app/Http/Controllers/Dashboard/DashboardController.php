<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Status;
use App\Models\Video;
use App\Models\Advertisement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $author = User::where('role', 'Author')->get()->count();
        $news = Status::where('status', 'Post')->get()->count();
        $video = Video::count();
        $advertisement = Advertisement::count();
        return view('dashboard.admin.dashboard', compact('author', 'news', 'video', 'advertisement'));
    }
}
