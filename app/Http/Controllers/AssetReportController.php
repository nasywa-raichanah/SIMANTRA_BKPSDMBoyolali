<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntraKompatabel;
use App\Models\EkstraKompatabel;
use Barryvdh\DomPDF\Facade\Pdf;

class AssetReportController extends Controller
{
    public function downloadPDF()
    {
        $intra = IntraKompatabel::all();
        $ekstra = EkstraKompatabel::all();

        // Debugging: Cek apakah data ada
        if ($intra->isEmpty() && $ekstra->isEmpty()) {
            return response()->json(['message' => 'Tidak ada data aset yang tersedia.'], 404);
        }

        // Generate PDF dari Blade view
        $pdf = Pdf::loadView('reports.assets', compact('intra', 'ekstra'))->setPaper('a4', 'landscape');

        return $pdf->download('laporan_aset.pdf');
    }
}
