<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Live;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminLiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $lives = Live::orderBy('created_at', 'desc')->get();
        return view('dashboard.admin.live.live', compact('lives'));
    }

    public function create()
    {
        return view('dashboard.admin.live.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        Live::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'url' => $request->url,
            'deskripsi' => $request->deskripsi,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('adminlive.index')->with('alert', 'Live Berhasil Diupload');
    }

    public function show($id)
    {
        $live = Live::find($id);
        return view('dashboard.admin.live.view', compact('live'));
    }

    public function edit ($id)
    {
        $live = Live::find($id);
        return view('dashboard.admin.live.edit', compact('live'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        Live::find($id)->update([
            'judul' => $request->judul,
            'url' => $request->url,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('adminlive.index')->with('alert', 'Live Berhasil Diupdate');
    }

    public function destroy($id)
    {
        Live::find($id)->delete();
        return redirect()->route('adminlive.index')->with('alert', 'Live Berhasil Dihapus');
    }
}
