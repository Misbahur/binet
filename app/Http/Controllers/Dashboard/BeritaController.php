<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use App\Models\Status;
use App\Models\News;
use App\Models\HotNews;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = News::where('user_id', Auth::user()->id)->with(['status'])->orderByDesc('created_at')->get();
        return view('dashboard.author.berita.berita', compact('news'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.author.berita.create', compact('categories'));
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

        if($request->kategori == 'Hot News') {
            HotNews::create(['news_id' => $news->id]);
        }

        Status::create([
            'status' => 'Pending',
            'news_id' => $news->id,
        ]);

        return redirect()->route('authorberita.index')->with('alert', 'Berita Berhasil Ditulis');
    }

    public function show($id)
    {
        $news = News::find($id);
        return view('dashboard.author.berita.view', compact('news'));
    }

    public function edit($id)
    {
        $news = News::find($id);
        $categories = Category::all();
        return view('dashboard.author.berita.edit', compact('news', 'categories'));
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

        $news = News::find($id)->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'thumbnail' => $namaFileThumbnail,
            'banner' => $namaFileBanner,
            'berita' => $request->berita,
            'kategori' => $request->kategori,
        ]);

        $kategori = News::find($id);
        $hotNews = HotNews::where('news_id', $kategori->id)->get();

        if($hotNews && $kategori->kategori != 'Hot News') {
            HotNews::where('news_id', $kategori->id)->delete();
        } elseif($hotNews && $kategori->kategori == 'Hot News') {
            HotNews::create(['news_id' => $kategori->id]);
        }

        return redirect()->route('authorberita.index')->with('alert', 'Berita Berhasil Diedit');
    }

    public function destroy($id)
    {
        News::find($id)->delete();
        Status::where('news_id', $id)->delete();
        
        return redirect()->route('authorberita.index')->with('alert', 'Berita Berhasil Dihapus');
    }
}
