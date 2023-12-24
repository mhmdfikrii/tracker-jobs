<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ManagementAccountController extends Controller
{
    public function index(User $user, $token)
    {
    $user = User::where('token', $token)->first();

    if (!$user || auth()->user()->id !== $user->id) {
        abort(403, 'Unauthorized action.');
    }
        return view('dashboard.management-account.change-info',[
            'user' => $user
        ]);
    }

        public function UpdateInfo(Request $request)
    {
        
        $rules = [
            'name' => 'required|max:255',
            'nohp' => 'required|min:9|max:15|unique:users,nohp,' . auth()->user()->id,
            'email' => 'required|email:dns|max:255|unique:users,email,' . auth()->user()->id,
            'password' => 'required|min:5|max:255',
        ];

        
        $validatedData = $request->validate($rules);
        // dd($request);
        if (!empty($validatedData['password'])) {
            if (!Hash::check($request->password, auth()->user()->password)) {
                return redirect()->back()->withErrors(['password' => 'Password lama tidak benar']);
            }
            unset($validatedData['password']);
        }

        // dd($validatedData);
        // Update informasi pengguna
        User::where('id', $request->id)
            ->update($validatedData);
        // Tambahkan pesan sukses atau alihkan ke halaman selanjutnya setelah penyimpanan sukses
        return redirect('/dashboard')->with('Berhasil', 'Informasi Akun berhasil diperbarui.');
    }

    public function IndexChange(User $user, $token)
    {
        $user = User::where('token', $token)->first();

        if (!$user || auth()->user()->id !== $user->id) {
            abort(403, 'Unauthorized action.');
        }
            return view('dashboard.management-account.change-password',[
                'user' => $user
            ]);
    }

    public function ChangePassword(Request $request)
    {
        $rules = [
            'password' => 'nullable|min:5|required_with:confirm_password|same:confirm_password',
        ];

        $validatedData = $request->validate($rules);

        // Hashing password baru jika ada perubahan
        if (!empty($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        // Validasi password lama
        if (!empty($request->old_password)) {
            if (!Hash::check($request->old_password, auth()->user()->password)) {
                return redirect()->back()->withErrors(['old_password' => 'Password lama tidak benar']);
            }
            unset($validatedData['old_password']);
        }

        User::where('id', $request->id)
            ->update($validatedData);

        return redirect('/dashboard')->with('Berhasil', 'Password Akun berhasil diganti.');
    }

   
}
