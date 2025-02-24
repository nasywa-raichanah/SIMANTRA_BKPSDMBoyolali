<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $table = 'assets';

    protected $fillable = [
        'nama_barang',
        'kode_barang',
        'kategori',
        'lokasi_barang',
        'kondisi'
    ];
}
