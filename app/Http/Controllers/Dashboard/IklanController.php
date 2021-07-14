<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Advertisement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class IklanController extends Controller
{
    public function index()
    {
        $advertisements = Advertisement::orderBy('created_at', 'desc')->get();
        return view('dashboard.admin.iklan.iklan', compact('advertisements'));
    }

    public function create()
    {
        return view('dashboard.admin.iklan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'perusahaan' => 'required|max:100',
            'awalTampil' => 'required',
            'akhirTampil' => 'required',
            'posisi' => 'required',
            'url' => 'required',
            'iklan' => 'required|mimes:jpeg,jpeg,png',
            'iklan' => 'max:1024|image',
        ]);

        $namaFile = Str::random(30) . '.' . $request->iklan->getClientOriginalExtension();
        $request->iklan->move(public_path('/storage/iklan'), $namaFile);

        Advertisement::create([
            'perusahaan' => $request->perusahaan,
            'awalTampil' => $request->awalTampil,
            'akhirTampil' => $request->akhirTampil,
            'posisi' => $request->posisi,
            'url' => $request->url,
            'iklan' => $namaFile,
        ]);
        return redirect()->route('iklan.index')->with('alert', 'Iklan Baru Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $advertisement = Advertisement::find($id);
        $iklan = ['top', 'left', 'right', 'middle'];
        return view('dashboard.admin.iklan.edit', compact('advertisement', 'iklan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'perusahaan' => 'required|max:100',
            'awalTampil' => 'required',
            'akhirTampil' => 'required',
            'posisi' => 'required',
            'url' => 'required',
            'iklan' => 'mimes:jpeg,jpeg,png',
            'iklan' => 'max:1024|image',
        ]);

        if(!$request->ikln) {
            $namaFile = $request->iklanLama;
        } else {
            $namaFileThumbnail = Str::random(30) . '.' . $request->thumbnail->getClientOriginalExtension(); 
            $request->thumbnail->move(public_path('/storage/thumbnail'), $namaFileThumbnail);
        }

        Advertisement::findorfail($id)->update([
            'perusahaan' => $request->perusahaan,
            'awalTampil' => $request->awalTampil,
            'akhirTampil' => $request->akhirTampil,
            'posisi' => $request->posisi,
            'url' => $request->url,
            'iklan' => $namaFile,
        ]);
        return redirect()->route('iklan.index')->with('alert', 'Iklan Baru Berhasil Diubah');
    }

    public function destroy($id)
    {
        Advertisement::findorfail($id)->delete();

        return redirect()->route('iklan.index')->with('alert', 'Iklan Baru Berhasil Dihapus');
    }
}
