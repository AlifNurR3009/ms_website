<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';

    protected $fillable = [
        'email_pelanggan',
        'password_pelanggan',
        'nama_pelanggan',
        'alamat',
        'nomer_telp',
    ];

    // Nonaktifkan timestamps
    public $timestamps = false;
}


