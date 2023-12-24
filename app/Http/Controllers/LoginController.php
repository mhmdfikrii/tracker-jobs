<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
        }

        return back()->with('LoginError','Email/Password yang anda Masukan salah');
    }


    public function store(Request $request)
    {
        try {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255',
            'nohp' => 'required|min:9|max:15|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            // 'token' => Str::uuid()
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['token'] = Str::uuid();

        User::create($validateData);

        return redirect('/login')->with('RegisBerhasil', 'Akun Anda Berhasil di Buat');
        } 

        catch (ValidationException $e) 
        {
            $errors = $e->validator->errors();
            $uniqueEmailErrors = $errors->get('email');
            $uniqueNohpErrors = $errors->get('nohp');

            if (!empty($uniqueEmailErrors)) {
                // Notifikasi untuk email yang sudah ada
                return redirect('/login')->with('RegisError', 'Email/Nomer Hp sudah digunakan');
            } elseif (!empty($uniqueNohpErrors)) {
                // Notifikasi untuk nomor HP yang sudah ada
                return redirect('/login')->with('RegisError', 'Email/Nomer Hp sudah digunakan');
            }

            // Notifikasi untuk validasi lainnya
            return redirect('/login')->with('RegisError', 'Gagal mendaftar. Periksa kembali isian Anda.');
        }

    }

     public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
