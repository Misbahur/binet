<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IklanController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.iklan.iklan');
    }

    public function create()
    {
        return view('dashboard.admin.iklan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'perusahaan' => 'required'
        ])
    }
}
