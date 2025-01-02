<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        // Ambil semua data pelanggan
        $pelanggan = Pelanggan::all();

        // Kirim data ke view
        return view('admin.pelanggan', compact('pelanggan'));
    }
    public function edit($id)
    {
        // Ambil data pelanggan berdasarkan ID
        $pelanggan = Pelanggan::findOrFail($id);

        // Kirim data ke view
        return view('admin.edit_pelanggan', compact('pelanggan'));
    }
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'email_pelanggan' => 'required|email|max:255|unique:pelanggan,email_pelanggan,' . $id . ',id_pelanggan',
            'nomer_telp' => 'required|string|max:15',
            'alamat' => 'required|string',
        ]);

        // Ambil data pelanggan
        $pelanggan = Pelanggan::findOrFail($id);

        // Update data
        $pelanggan->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'email_pelanggan' => $request->email_pelanggan,
            'nomer_telp' => $request->nomer_telp,
            'alamat' => $request->alamat,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect('/admin/pelanggan')->with('success', 'Data pelanggan berhasil diperbarui.');
    }
        public function destroy($id)
    {
        // Cari pelanggan berdasarkan ID
        $pelanggan = Pelanggan::findOrFail($id);

        // Hapus pelanggan
        $pelanggan->delete();

        // Redirect kembali ke halaman pelanggan dengan pesan sukses
        return redirect('/admin/pelanggan')->with('success', 'Data pelanggan berhasil dihapus.');
    }


}

