<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthorVidioController extends Controller
{
    public function index()
    {
        $videos = Video::where('user_id', Auth::user()->id)->get();
        return view('dashboard.author.vidio.vidio', compact('videos'));
    }

    public function create()
    {
        return view('dashboard.author.vidio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'thumbnail' => 'required|mimes:jpeg,jpg,png', 
            'thumbnail.*' => 'image|max:1024',
            'url' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);
        
        $namaFileThumbnail = Str::random(30) . '.' . $request->thumbnail->getClientOriginalExtension(); 
        $request->thumbnail->move(public_path('/storage/video/thumbnail'), $namaFileThumbnail);

        Video::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'thumbnail' => $namaFileThumbnail,
            'url' => $request->url,
            'deskripsi' => $request->deskripsi,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('authorvidio.index')->with('alert'. 'Video Berhasil Diupload');
    }

    public function show($id)
    {
        $video = Video::find($id);
        return view('dashboard.author.vidio.view', compact('video'));
    }
}
