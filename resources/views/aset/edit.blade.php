@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/tambahaset.css') }}">

    <p>Edit Barang</p>

    <form action="{{ route('aset.update', $asset->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Gunakan method PUT untuk update data --}}

        <div class="mb-4">
            <label class="label">Nama Barang</label>
            <input type="text" name="nama_barang" class="input-field" placeholder="Masukkan nama barang" value="{{ old('nama_barang', $asset->nama_barang) }}">
        </div>

        <div class="mb-4">
            <label class="label">Kode Barang</label>
            <input type="text" name="kode_barang" class="input-field" placeholder="Masukkan kode barang" value="{{ old('kode_barang', $asset->kode_barang) }}">
        </div>

        <div class="mb-4">
            <label class="label">Kategori</label>
            <select name="kategori" class="input-field-v">
                <option value="">Pilih Kategori</option>
                <option value="Elektronik" {{ $asset->kategori == 'Elektronik' ? 'selected' : '' }}>Elektronik</option>
                <option value="Furniture" {{ $asset->kategori == 'Furniture' ? 'selected' : '' }}>Furniture</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="label">Lokasi Barang</label>
            <input type="text" name="lokasi_barang" class="input-field" placeholder="Masukkan lokasi barang" value="{{ old('lokasi_barang', $asset->lokasi_barang) }}">
        </div>

        <div class="mb-4">
            <label class="label">Kondisi</label>
            <select name="kondisi" class="input-field-v">
                <option value="">Pilih Kondisi</option>
                <option value="Baik" {{ $asset->kondisi == 'Baik' ? 'selected' : '' }}>Baik</option>
                <option value="Rusak" {{ $asset->kondisi == 'Rusak' ? 'selected' : '' }}>Rusak</option>
            </select>
        </div>

        <div class="button-group">
            <a href="{{ route('aset.index') }}" class="btn btn-cancel">Batal</a>
            <button type="submit" class="btn btn-submit">Perbarui</button>
        </div>
    </form>

@endsection
