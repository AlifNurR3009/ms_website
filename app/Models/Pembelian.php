<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian';

    protected $primaryKey = 'id_pembelian';

    protected $fillable = ['id_pelanggan', 'id_produk', 'tanggal_pembelian', 'total_harga', 'status_pembelian'];

    public $timestamps = false;
}


