<?php

namespace App\Http\Controllers;

use App\Models\tracking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index(User $user)
{
    $user_id = auth()->user()->id;

    $jumlahData = tracking::where('user_id', $user_id)->count();

    // Menghitung jumlah entri yang posisinya tidak 'Apply'
    $ProsesHiring = tracking::where('user_id', $user_id)
    ->where(function ($query) {
        $query->where('proses', '!=', 'Apply')
            ->where('proses', '!=', 'Rejected')
            ->where('proses', '!=', 'Ghosting');
    })
    ->count();


    $TotalDitolak = tracking::where('user_id', $user_id)
    ->where(function ($query) {
        $query->where('proses', '=', 'Rejected')
              ->orWhere('proses', '=', 'Ghosting');
    })
    ->count();


    $data_user = tracking::where('user_id', $user_id)
    ->orderBy('updated_at', 'desc')
    ->paginate(10);


    return view('dashboard.index', [
        'data_user' => $data_user,
        'jumlahData' => $jumlahData,
        'ProsesHiring' => $ProsesHiring,
        'TotalDitolak' => $TotalDitolak,
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

        $validatedData['token'] = Str::uuid();
        $validatedData['user_id'] = auth()->user()->id;

        tracking::create($validatedData);

        return redirect('/dashboard')->with('Berhasil', 'Data Berhasil ditambahkan');
    }

        catch (ValidationException $e)
        {
            $e->validator->errors();
            {
                return redirect('/dashboard/tracker-jobs/')->with('GagalInput', 'Gagal Membuat Data Baru. Silahkan Cek kembali data Anda');
            }
            
        }
    }

    public function show(tracking $data_user, $token)
    {
       $data_user = tracking::with('user')->where('token', $token)->first();
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

    public function edit(tracking $data_user, $token)
{

    $data_user = tracking::with('user')->where('token', $token)->first();
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


    public function update(Request $request, $token)
    {
        
        try{
            tracking::with('user')->where('token', $token)->first();
            // $data_user = tracking::where('token', $token)->first();

            // dd($token);
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

            
            tracking::where('id', $request->id)->update($validatedData);

            return redirect('/dashboard')->with('Berhasil', 'Update Data Anda berhasil');
        }
        
        catch (ValidationException $e)
        {
             $errors = $e->validator->errors();

            return redirect()->back()->withErrors($errors)->with(['GagalUpdate' => 'Gagal Mengupdate Data, Silahkan Cek kembali data Anda']);
            
        }       
    }

    public function SearchItems(Request $request)
{
    
    $search = $request->input('search');
    
    $user_id = auth()->user()->id;

    $data_user = Tracking::where('user_id', $user_id)
        ->where(function ($query) use ($search) {
            $query->where('nama_perusahaan', 'LIKE', "%$search%")
                  ->orWhere('posisi', 'LIKE', "%$search%")
                  ->orWhere('tgldaftar', 'LIKE', "%$search%")
                  ->orWhere('alamat_perusahaan', 'LIKE', "%$search%")
                  ->orWhere('proses', 'LIKE', "%$search%")
                  ->orWhere('keterangan', 'LIKE', "%$search%");
        })
        ->orderBy('updated_at', 'desc')
        ->paginate(10);

        // Menghitung jumlah entri yang posisinya tidak 'Apply'
    $ProsesHiring = tracking::where('user_id', $user_id)
    ->where(function ($query) {
        $query->where('proses', '!=', 'Apply')
            ->where('proses', '!=', 'Rejected')
            ->where('proses', '!=', 'Ghosting');
    })
    ->count();

    $TotalDitolak = tracking::where('user_id', $user_id)
    ->where(function ($query) {
        $query->where('proses', '=', 'Rejected')
              ->orWhere('proses', '=', 'Ghosting');
    })
    ->count();

        $jumlahData = tracking::where('user_id', auth()->user()->id)->count();

    return view('dashboard.index', ['data_user' => $data_user,
                                    'jumlahData' => $jumlahData,
                                    'ProsesHiring' => $ProsesHiring,
                                    'TotalDitolak' => $TotalDitolak, 
                                    ]);
}


    public function destroy(tracking $data_user, $token)
    {
        $data_user = tracking::with('user')->where('token', $token)->first();
     if ($data_user === null || $data_user->user === null) {
        abort(403);
    }
    if($data_user->user->id !== auth()->user()->id) {
     abort(403);
    }
    tracking::destroy($data_user->id);
    return redirect('/dashboard')->with('Berhasil','Berhasil Hapus Data');

    }
}
