<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\AuthorStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::where('role', 'Author')->get();
        return view('dashboard.admin.author.author', compact('users'));
    }

    public function edit($id)
    {
        $authorStatus = AuthorStatus::find($id);
        $statuses = ['Aktif', 'Pending', 'Non-Aktif'];
        return view('dashboard.admin.author.edit', compact('authorStatus', 'statuses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['status' => 'required|string|max:20']);
        AuthorStatus::find($id)->update(['status' => $request->status]);
        return redirect()->route('author.index')->with('alert', 'Status Author Berihasil Diupdate');
    }
}
