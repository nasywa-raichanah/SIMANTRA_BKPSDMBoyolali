<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntraKompatabel;
use App\Models\EkstraKompatabel;
use App\Models\Asset;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil dataset yang sama seperti halaman aset
        $totalIntra = IntraKompatabel::count();
        $totalEkstra = EkstraKompatabel::count();
        $totalAssets = $totalIntra + $totalEkstra; // Total semua aset


        return view('dashboard', compact('totalAssets', 'totalIntra', 'totalEkstra'));
    }
}
