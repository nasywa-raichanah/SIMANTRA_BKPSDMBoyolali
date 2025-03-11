<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntraKompatabel;
use App\Models\EkstraKompatabel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class AssetReportController extends Controller
{
    public function downloadPDF()
    {
        // Cek apakah user adalah admin atau pengguna biasa
        if (Auth::guard('admin')->check()) {
            $role = 'admin';
        } else {
            $role = 'user';
        }

        // Ambil data aset
        $intra = IntraKompatabel::all();
        $ekstra = EkstraKompatabel::all();

        // Debugging: Cek apakah data ada
        if ($intra->isEmpty() && $ekstra->isEmpty()) {
            return response()->json(['message' => 'Tidak ada data aset yang tersedia.'], 404);
        }

        // Generate PDF dengan Blade view
        $pdf = Pdf::loadView('reports.assets', compact('intra', 'ekstra', 'role'))->setPaper('a4', 'landscape');

        return $pdf->download('laporan_aset.pdf');
    }
}
