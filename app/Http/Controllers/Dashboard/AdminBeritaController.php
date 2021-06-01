<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\News;
use App\Models\User;
use App\Models\Status;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AdminBeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::with(['news'])->get();
        return view('dashboard.admin.berita.berita', compact('users'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.admin.berita.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:100',
            'thumbnail' => 'required|mimes:jpeg,jpg,png', 
            'thumbnail.*' => 'image|max:1024',
            'kategori' => 'required|string',
            'banner' => 'required|mimes:jpeg,jpg,png', 
            'banner.*' => 'image|max:1024',
            'berita' => 'required|string',
        ]);

        $namaFileThumbnail = Str::random(30) . '.' . $request->thumbnail->getClientOriginalExtension(); 
        $request->thumbnail->move(public_path('/storage/thumbnail'), $namaFileThumbnail);
        
        $namaFileBanner = Str::random(30) . '.' . $request->banner->getClientOriginalExtension();
        $request->banner->move(public_path('/storage/banner'), $namaFileBanner);

        $news = News::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'thumbnail' => $namaFileThumbnail,
            'banner' => $namaFileBanner,
            'berita' => $request->berita,
            'kategori' => $request->kategori,
            'user_id' => Auth::user()->id,
        ]);

        Status::create([
            'status' => 'Pending',
            'news_id' => $news->id,
        ]);

        return redirect()->route('adminberita.index')->with('alert', 'Berita Berhasil Ditulis');
    }

    public function show($id)
    {
        $users = User::with(['news'])->find($id);
        return view('dashboard.admin.berita.detail', compact('users'));
    }

    public function edit($id)
    {
        $news = News::find($id);
        $categories = Category::all();
        return view('dashboard.admin.berita.edit', compact('news', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:100',
            'thumbnail' => 'mimes:jpeg,jpg,png', 
            'thumbnail.*' => 'image|max:1024',
            'kategori' => 'required|string',
            'banner' => 'mimes:jpeg,jpg,png', 
            'banner.*' => 'image|max:1024',
            'berita' => 'required|string',
        ]);

        if(!$request->thumbnail) {
            $namaFileThumbnail = $request->thumbnailLama;
        } else {
            $namaFileThumbnail = Str::random(30) . '.' . $request->thumbnail->getClientOriginalExtension(); 
            $request->thumbnail->move(public_path('/storage/thumbnail'), $namaFileThumbnail);
        }

        if(!$request->banner) {
            $namaFileBanner = $request->bannerLama;
        } else {
            $namaFileBanner = Str::random(30) . '.' . $request->banner->getClientOriginalExtension();
            $request->banner->move(public_path('/storage/banner'), $namaFileBanner);
        }

        News::find($id)->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'thumbnail' => $namaFileThumbnail,
            'banner' => $namaFileBanner,
            'berita' => $request->berita,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('adminberita.index')->with('alert', 'Berita Berhasil Diedit');
    }

    public function destroy($id)
    {
        News::find($id)->delete();
        Status::where('news_id', $id)->delete();
        
        return redirect()->route('adminberita.index')->with('alert', 'Berita Berhasil Dihapus');
    }

    public function view($id)
    {
        $news = News::find($id);
        return view('dashboard.admin.berita.view', compact('news'));
    }
}
