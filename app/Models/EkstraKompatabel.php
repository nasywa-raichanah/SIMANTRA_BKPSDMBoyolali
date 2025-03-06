<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstraKompatabel extends Model
{
    use HasFactory;

    protected $table = 'ekstra_kompatabel';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'nomor_register',
        'merk_type',
        'bahan',
        'tahun_pembelian',
        'harga',
        'keterangan',
    ];
}
