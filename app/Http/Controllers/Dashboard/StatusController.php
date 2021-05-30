<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\News;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = News::where('user_id', Auth::user()->id)->with(['status'])->orderByDesc('created_at')->get();
        return view('dashboard.status.status', compact('statuses'));
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

        return redirect()->route('status.index')->with('alert', 'Status Post Berita Berhasil Diupdate');
    }
}
