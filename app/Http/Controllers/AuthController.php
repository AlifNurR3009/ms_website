<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('login'); // Buat file login.blade.php di folder resources/views
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari pelanggan berdasarkan email
        $pelanggan = Pelanggan::where('email_pelanggan', $request->email)->first();

        // Verifikasi password tanpa hashing
        if ($pelanggan && $pelanggan->password_pelanggan === $request->password) {
            // Simpan data user ke session
            session(['logged_user' => $pelanggan]);
            return redirect()->route('home')->with('success', 'Berhasil login!');
        }

        return back()->withErrors(['email' => 'Email atau password salah!']);
    }

    // Proses logout
    public function logout()
    {
        session()->forget('logged_user');
        return redirect()->route('home')->with('success', 'Berhasil logout!');
    }
}
