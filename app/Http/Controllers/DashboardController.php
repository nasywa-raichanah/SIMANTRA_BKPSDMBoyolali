<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil dataset yang sama seperti halaman aset
        $totalAssets = Asset::count();
        $goodAssets = Asset::where('kondisi', 'baik')->count();
        $badAssets = Asset::where('kondisi', 'rusak')->count();

        $kategoriCounts = Asset::selectRaw('kategori, COUNT(*) as total')
            ->groupBy('kategori')
            ->pluck('total', 'kategori')->toArray();

        $lokasiCounts = Asset::selectRaw('lokasi_barang, COUNT(*) as total')
            ->groupBy('lokasi_barang')
            ->pluck('total', 'lokasi_barang')->toArray();

        return view('dashboard', compact('totalAssets', 'goodAssets', 'badAssets', 'kategoriCounts', 'lokasiCounts'));
    }
}
