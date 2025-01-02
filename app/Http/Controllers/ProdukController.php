<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        // Ambil semua data produk
        $produk = Produk::all();

        // Tampilkan ke view
        return view('admin.produk', compact('produk'));
    }
    public function create()
    {
        return view('admin.tambah_produk');
    }

    // Menyimpan data baru ke tabel produk
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric|min:0',
            'stok_produk' => 'required|integer|min:0',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        // Simpan file gambar jika ada
        if ($request->hasFile('gambar_produk')) {
            $data['gambar_produk'] = $request->file('gambar_produk')->store('produk', 'public');
        }

        // Buat produk baru
        Produk::create($data);

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);

        return view('admin.edit_produk', compact('produk'));
    }

    // Menyimpan perubahan produk yang telah diedit
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric|min:0',
            'stok_produk' => 'required|integer|min:0',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $produk = Produk::findOrFail($id);

        // Ambil data inputan
        $data = $request->all();

        // Jika ada gambar baru, hapus gambar lama dan simpan gambar baru
        if ($request->hasFile('gambar_produk')) {
            // Hapus gambar lama jika ada
            if ($produk->gambar_produk) {
                unlink(storage_path('app/public/' . $produk->gambar_produk));
            }

            // Simpan gambar baru
            $data['gambar_produk'] = $request->file('gambar_produk')->store('produk', 'public');
        }

        // Update data produk
        $produk->update($data);

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        // Hapus gambar produk jika ada
        if ($produk->gambar_produk) {
            unlink(storage_path('app/public/' . $produk->gambar_produk));
        }

        // Hapus data produk dari database
        $produk->delete();

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil dihapus.');
    }
    public function add()
{
    $produk = Produk::all(); // atau gunakan query sesuai kebutuhan
    return view('product', compact('produk'));
}

    public function tampilkan()
    {
        $dataPembelian = DB::table('pembelian')
            ->join('pelanggan', 'pembelian.id_pelanggan', '=', 'pelanggan.id_pelanggan')
            ->join('produk', 'pembelian.id_produk', '=', 'produk.id_produk')
            ->select(
                'pembelian.id_pembelian',
                'pelanggan.nama_pelanggan',
                'produk.nama_produk',
                'pembelian.tanggal_pembelian',
                'pembelian.total_harga',
            )
            ->get();

        return view('admin.pembelian', compact('dataPembelian'));
    }

    
}



