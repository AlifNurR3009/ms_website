<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Proses login
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari admin berdasarkan email
        $admin = Admin::where('email', $request->email)->first();

        // Verifikasi password tanpa hashing
        if ($admin && $admin->password === $request->password) {
            // Simpan data admin ke session
            session(['logged_admin' => $admin]);
            return redirect('/admin/home')->with('success', 'Berhasil login!');
        }

        return back()->withErrors(['email' => 'Email atau password salah!']);
    }


    // Logout
    public function logout(Request $request)
    {
        // Hapus session
        $request->session()->forget(['admin_id', 'admin_username']);
        return redirect('/admin/login')->with('success', 'Logout berhasil.');
    }
}

