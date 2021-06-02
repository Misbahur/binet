<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\News;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminStatusBeritaController extends Controller
{
    public function index()
    {
        $statuses = News::orderByDesc('created_at')->get();
        return view('dashboard.admin.status.status', compact('statuses'));
    }

    public function edit($id)
    {
        $status = Status::find($id);
        $statuses = ['Post', 'Pending', 'Cancel Post'];
        return view('dashboard.status.edit', compact('status', 'statuses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['status' => 'required|string|max:20']);
        $hari = date('l');
        $tgl = date('Y-m-d');

        Status::find($id)->update([
            'status' => $request->status,
            'hari' => $hari,
            'tgl' => $tgl,
        ]);

        return redirect()->route('adminstatus.index')->with('alert', 'Status Post Berita Berhasil Diupdate');
    }
}
