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

        return view('dashboard', compact('totalAssets', 'goodAssets', 'badAssets'));
    }
}
