<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function Register ()
    {
        return view ('register.index');
    }

    public function registproses(Request $request)
    {
        // Pengecekan apakah email sudah terdaftar
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            return redirect()->back()->with('error', 'Email sudah digunakan');
        }

        // Jika email belum terdaftar, lanjutkan proses registrasi
        $user = new User();
        $user->name = $request->name;
        $user->role_id = 2;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Menampilkan pesan sukses menggunakan metode alert() dari JavaScript
        echo '<script>alert("Registrasi Berhasil. Akun Anda telah berhasil didaftarkan.");</script>';
        return redirect()->route('Login');
    }

}