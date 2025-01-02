<?php
namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembelianController extends Controller
{
    public function create($id_produk)
    {
        // Ambil data produk berdasarkan ID
        $produk = Produk::findOrFail($id_produk);

        return view('create', compact('produk'));
    }

   public function store(Request $request)
    {
                $pelanggan = session('logged_user');
        if (!$pelanggan || !isset($pelanggan->id_pelanggan)) {
            return redirect('/login')->with('error', 'User session not found. Please login first');
        }

        $id_pelanggan = $pelanggan->id_pelanggan; // Ambil ID pelanggan dari session

        // Validasi input
        $request->validate([
            'id_produk' => 'required|exists:produk,id_produk',
            'jumlah' => 'required|integer|min:1',
            'harga' => 'required|numeric|min:1',
        ]);

        // Ambil ID pelanggan dari session

      

        // Hitung total harga
        $total_harga = $request->input('jumlah') * $request->input('harga');

        // Simpan data pembelian
        Pembelian::create([
            'id_pelanggan' => $id_pelanggan,
            'id_produk' => $request->input('id_produk'),
            'tanggal_pembelian' => now(),
            'total_harga' => $total_harga,
            'status_pembelian' => 'Pending',  // Status pembelian
        ]);

        return redirect()->route('home')->with('success', 'Pembelian berhasil!');
    }
}
