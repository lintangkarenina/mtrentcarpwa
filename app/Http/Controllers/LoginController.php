<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login ()
    {
        return view ('login.index');
    }
    
    public function Loginproses(Request $request)
    {
        $cred = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($cred)) {
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect()->route('Admin-Beranda')->with('success', 'Login successful as admin.');
            } else if (Auth::user()->role_id == 2) {
                return redirect()->route('Pengunjung-Beranda')->with('success', 'Berhasil login sebagai pengunjung.');
            }
        }
    
        return redirect()->route('Login')->with('error', 'Login Gagal, Masukkan Email atau Password dengan benar!');
    }
    

    public function Logout(){
        Auth::Logout();
        return redirect()->route('Pengunjung-Beranda')->with('success', 'Logout Berhasil!');
    }
}
