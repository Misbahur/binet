<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        return view('dashboard.admin.kategori.kategori', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.admin.kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:30',
        ]);

        Category::create(['kategori' => $request->kategori]);

        return redirect()->route('kategori.index')->with('alert', 'Kategori Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('dashboard.admin.kategori.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required|string|max:30',
        ]);

        Category::find($id)->update(['kategori' => $request->kategori]);

        return redirect()->route('kategori.index')->with('alert', 'Kategori Berhasil Diedit');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('kategori.index')->with('alert', 'Kategori Berhasil Dihapus');
    }

}
