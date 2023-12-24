<?php

namespace App\Http\Controllers;

use App\Models\tracking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class DashboardController extends Controller
{
    public function index(User $user)
    {
        // dd(tracking::where('user_id', auth()->user()->id)->get());
        return view('dashboard.index', [
            'data_user' => tracking::where('user_id', auth()->user()->id)->get(),
            'user' => $user,
        ]);
    }

    public function create(User $user)
    {
        return view('dashboard.tracker-jobs.create', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        try{
        $validatedData = $request->validate([
            'tgldaftar' => 'required|max:255',
            'posisi' => 'required|max:255',
            'nama_perusahaan' => 'required|max:255',
            'alamat_perusahaan' => 'required|max:255',
            'link' => 'required|max:255',
            'proses' => 'required|max:255',
            'keterangan' => 'max:1000',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        tracking::create($validatedData);

        return redirect('/dashboard')->with('Berhasil', 'Data Berhasil ditambahkan');
    }

        catch (ValidationException $e)
        {
            $e->validator->errors();

            return redirect('/dashboard/tracker-jobs')->with('GagalInput', 'Gagal Membuat Data Baru. Kurangi jumlah teks keterangan');
        }
    }

    public function show(tracking $data_user, $id)
    {
        $data_user = tracking::with('user')->find($id);
     if ($data_user === null || $data_user->user === null) {
        abort(403);
    }
    if($data_user->user->id !== auth()->user()->id) {
     abort(403);
    }

    return view('dashboard.tracker-jobs.show',[
        'data_user' => $data_user,
    ]);

    }

    public function edit(tracking $data_user, $id)
{

    $data_user = tracking::with('user')->find($id);
     if ($data_user === null || $data_user->user === null) {
        abort(403);
    }
    if($data_user->user->id !== auth()->user()->id) {
     abort(403);
    }
    
    return view('dashboard.tracker-jobs.edit',[
        'data_user' => $data_user,
    ]);
}


    public function update(Request $request, tracking $data_user, $id)
    {
        $data_user = tracking::with('user')->find($id);
        $rules = [
            'tgldaftar' => 'required|max:255',
            'posisi' => 'required|max:255',
            'nama_perusahaan' => 'required|max:255',
            'alamat_perusahaan' => 'required|max:255',
            'link' => 'required|max:255',
            'proses' => 'required|max:255',
            'keterangan' => 'max:1000',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        tracking::where('id', $data_user->id)->update($validatedData);

        return redirect('/dashboard');
    }

    public function destroy(tracking $data_user, $id)
    {
        $data_user = tracking::with('user')->find($id);
     if ($data_user === null || $data_user->user === null) {
        abort(403);
    }
    if($data_user->user->id !== auth()->user()->id) {
     abort(403);
    }
    tracking::destroy($data_user->id);
    return redirect('/dashboard');

    }
}
