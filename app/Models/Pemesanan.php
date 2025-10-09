<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemesan',
        'jenis_kelamin',
        'nomor_identitas',
        'tipe_kamar',
        'harga',
        'tanggal_pesan',
        'durasi_menginap',
        'termasuk_breakfast',
        'total_bayar',
    ];
}

