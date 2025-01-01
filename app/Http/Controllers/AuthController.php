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

    // Menampilkan halaman register
    public function showRegisterForm()
    {
        return view('register'); // Buat file register.blade.php di folder resources/views
    }

    // Proses register
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'email_pelanggan' => 'required|email|unique:pelanggan,email_pelanggan',
            'password_pelanggan' => 'required|min:6|confirmed',
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'nomer_telp' => 'required|digits_between:10,15',
        ]);

        // Simpan data pelanggan ke database
        Pelanggan::create([
            'email_pelanggan' => $request->email_pelanggan,
            'password_pelanggan' => $request->password_pelanggan, // Simpan langsung (tanpa hashing)
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'nomer_telp' => $request->nomer_telp,
        ]);

        return redirect()->route('login')->with('success', 'Berhasil mendaftar, silakan login!');
    }
}
