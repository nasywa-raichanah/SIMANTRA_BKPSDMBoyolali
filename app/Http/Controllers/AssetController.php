<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;

class AssetController extends Controller
{
    public function index(Request $request)
    {
        $query = Asset::query();

        // Filter pencarian
        if ($request->has('search') && $request->search != '') {
            $query->where('nama_barang', 'like', '%' . $request->search . '%')
                  ->orWhere('kode_barang', 'like', '%' . $request->search . '%');
        }

        // Sorting data
        if ($request->has('sort') && $request->sort == 'oldest') {
            $query->orderBy('created_at', 'asc');
        } else {
            $query->orderBy('created_at', 'desc'); // Default terbaru
        }
        
        // Cek apakah ada filter kondisi yang dipilih
        if ($request->has('kondisi') && $request->kondisi != '') {
            $query->where('kondisi', $request->kondisi);
        }
        // Pagination (10 data per halaman)
        $assets = $query->paginate(10);

        return view('aset.index', compact('assets'));
    }

    public function create()
    {
        return view('aset.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'kode_barang' => 'required|string|unique:assets,kode_barang',
            'kategori' => 'required|string',
            'lokasi_barang' => 'required|string',
            'kondisi' => 'required|in:Baik,Rusak,Hilang',
        ]);

        Asset::create($request->all());

        return redirect()->route('aset.index')->with('success', 'Aset berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $asset = Asset::findOrFail($id);
        return view('aset.edit', compact('asset'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'kode_barang' => 'required|string|unique:assets,kode_barang,' . $id,
            'kategori' => 'required|string',
            'lokasi_barang' => 'required|string',
            'kondisi' => 'required|in:Baik,Rusak,Hilang',
        ]);

        $asset = Asset::findOrFail($id);
        $asset->update($request->all());

        return redirect()->route('aset.index')->with('success', 'Aset berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();

        return redirect()->route('aset.index')->with('success', 'Aset berhasil dihapus.');
    }
}
