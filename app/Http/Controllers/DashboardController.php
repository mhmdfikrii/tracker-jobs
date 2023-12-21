<?php

namespace App\Http\Controllers;

use App\Models\tracking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'data_user' => tracking::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.tracker-jobs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tgldaftar' => 'required|max:255',
            'posisi' => 'required|max:255',
            'nama_perusahaan' => 'required|max:255',
            'alamat_perusahaan' => 'required|max:255',
            'link' => 'required|max:255',
            'proses' => 'required|max:255',
            'keterangan' => 'max:255',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        tracking::create($validatedData);

        // dd($validatedData);
        return redirect('/dashboard');
    }
}
