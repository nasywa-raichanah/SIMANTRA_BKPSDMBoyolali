<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntraKompatabel;
use App\Models\EkstraKompatabel;

class AssetController extends Controller
{
    // Halaman utama
    public function index()
    {
        return view('aset.index');
    }

    public function adminIndex()
    {
        return view('admin.index');
    }

    // ======================== INTRA KOMPATABEL ========================

    public function adminIntra(Request $request)
    {
        $intra = IntraKompatabel::query();

        if ($request->filled('search')) {
            $intra->where('nama_barang', 'like', '%' . $request->search . '%');
        }

        $intra = $intra->orderBy('kode_barang')->orderBy('nomor_register')->paginate(10);

        return view('admin.aset_intra', compact('intra'));
    }

    public function createIntra()
    {
        return view('admin.create_intra');
    }

    public function storeIntra(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|string|max:50',
            'nama_barang' => 'required|string|max:255|unique:intra_kompatabel,nama_barang',
            'nomor_register' => 'required|string|max:100',
            'merk_type' => 'required|string|max:100',
            'bahan' => 'required|string|max:100',
            'tahun_pembelian' => 'required|integer',
            'harga' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);   

        IntraKompatabel::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'nomor_register' => $request->nomor_register,
            'merk_type' => $request->merk_type,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.intra')->with('success', 'Aset Intra berhasil ditambahkan.');
    }

    public function editIntra($id)
    {
        $asset = IntraKompatabel::findOrFail($id);
        return view('admin.edit_intra', compact('asset'));
    }

    public function updateIntra(Request $request, $id)
    {
        $asset = IntraKompatabel::findOrFail($id);
        $asset->update($request->all());

        return redirect()->route('admin.intra')->with('success', 'Aset Intra berhasil diperbarui.');
    }

    public function destroyIntra($id)
    {
        $asset = IntraKompatabel::findOrFail($id);
        $asset->delete();

        return redirect()->route('admin.intra')->with('success', 'Aset Intra berhasil dihapus.');
    }

    // ======================== EKSTRA KOMPATABEL ========================

    public function adminEkstra(Request $request)
    {
        $ekstra = EkstraKompatabel::query();

        if ($request->filled('search')) {
            $ekstra->where('nama_barang', 'like', '%' . $request->search . '%');
        }

        $ekstra = $ekstra->orderBy('kode_barang')->orderBy('nomor_register')->paginate(10);

        return view('admin.aset_ekstra', compact('ekstra'));
    }

    public function createEkstra()
    {
        return view('admin.create_ekstra');
    }

    public function storeEkstra(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|string|max:50',
            'nama_barang' => 'required|string|max:255|unique:ekstra_kompatabel,nama_barang',
            'nomor_register' => 'required|string|max:100',
            'merk_type' => 'required|string|max:100',
            'bahan' => 'required|string|max:100',
            'tahun_pembelian' => 'required|integer',
            'harga' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);
               

        EkstraKompatabel::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'nomor_register' => $request->nomor_register,
            'merk_type' => $request->merk_type,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.ekstra')->with('success', 'Aset Ekstra berhasil ditambahkan.');
    }

    public function editEkstra($id)
    {
        $asset = EkstraKompatabel::findOrFail($id);
        return view('admin.edit_ekstra', compact('asset'));
    }

    public function updateEkstra(Request $request, $id)
    {
        $asset = EkstraKompatabel::findOrFail($id);
        $asset->update($request->all());

        return redirect()->route('admin.ekstra')->with('success', 'Aset Ekstra berhasil diperbarui.');
    }

    public function destroyEkstra($id)
    {
        $asset = EkstraKompatabel::findOrFail($id);
        $asset->delete();

        return redirect()->route('admin.ekstra')->with('success', 'Aset Ekstra berhasil dihapus.');
    }

    public function intra(Request $request)
{
    $intra = IntraKompatabel::query();

    if ($request->filled('search')) {
        $intra->where('nama_barang', 'like', '%' . $request->search . '%');
    }

    $intra = $intra->orderBy('created_at', 'desc')->paginate(10);

    return view('aset.intra', compact('intra'));
}

public function ekstra(Request $request)
{
    $ekstra = EkstraKompatabel::query();

    if ($request->filled('search')) {
        $ekstra->where('nama_barang', 'like', '%' . $request->search . '%');
    }

    $ekstra = $ekstra->orderBy('created_at', 'desc')->paginate(10);

    return view('aset.ekstra', compact('ekstra'));
}

}
