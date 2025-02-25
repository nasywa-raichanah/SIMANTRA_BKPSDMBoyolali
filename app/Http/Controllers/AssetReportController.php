<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use Barryvdh\DomPDF\Facade\Pdf;

class AssetReportController extends Controller
{
    public function downloadPDF()
    {
        $assets = Asset::all();

        // Debugging: Cek apakah data ada
        if ($assets->isEmpty()) {
            return "Tidak ada data aset yang tersedia.";
        }

        $pdf = Pdf::loadView('reports.assets', compact('assets'));

        return $pdf->download('laporan_aset.pdf');
    }

}

