@extends('layouts.user')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/tambahaset.css') }}">

    <p>Edit Barang</p>

    <form action="{{ route('admin.ekstra.update', $asset->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Gunakan method PUT untuk update data --}}

        <div class="mb-4">
            <label class="label">Kode Barang</label>
            <input type="text" name="kode_barang" class="input-field" placeholder="Masukkan kode barang" value="{{ old('kode_barang', $asset->kode_barang) }}">
        </div>

        <div class="mb-4">
            <label class="label">Nama Barang</label>
            <input type="text" name="nama_barang" class="input-field" placeholder="Masukkan nama barang" value="{{ old('nama_barang', $asset->nama_barang) }}">
        </div>

        <div class="mb-4">
            <label class="label">Nomor Registrasi</label>
            <input type="text" name="nomor_register" class="input-field" placeholder="Masukkan nomor register" value="{{ old('nomor_register', $asset->nomor_register) }}">
        </div>

        <div class="mb-4">
            <label class="label">Merk/Type</label>
            <input type="text" name="merk_type" class="input-field" placeholder="Masukkan merk/type" value="{{ old('merk_type', $asset->merk_type) }}">
        </div>

        <div class="mb-4">
            <label class="label">Bahan</label>
            <select name="bahan" class="input-field-v">
                <option value="">Pilih Baham</option>
                <option value="Besi" {{ $asset->bahan == 'Besi' ? 'selected' : '' }}>Besi</option>
                <option value="Alumunium" {{ $asset->bahan == 'Alumunium' ? 'selected' : '' }}>Alumunium</option>
                <option value="Elektronik" {{ $asset->bahan == 'Elektronik' ? 'selected' : '' }}>Elektronik</option>
                <option value="Kayu" {{ $asset->bahan == 'Kayu' ? 'selected' : '' }}>Kayu</option>
                <option value="Kaca" {{ $asset->bahan == 'Kaca' ? 'selected' : '' }}>Kaca</option>
                <option value="Plastik" {{ $asset->bahan == 'Plastik' ? 'selected' : '' }}>Plastik</option>
                <option value="Campuran" {{ $asset->bahan == 'Campuran' ? 'selected' : '' }}>Campuran</option>
                <option value="-" {{ $asset->bahan == '-' ? 'selected' : '' }}>-</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="label">Tahun Pembelian</label>
            <input type="text" name="tahun_pembelian" class="input-field" placeholder="Masukkan tahun pembelian" value="{{ old('tahun_pembelian', $asset->tahun_pembelian) }}">
        </div>

        <div class="mb-4">
            <label class="label">Harga</label>
            <input type="text" name="harga" class="input-field" placeholder="Masukkan harga" value="{{ old('harga', $asset->harga) }}">
        </div>

        <div class="mb-4">
            <label class="label">Keterangan</label>
            <input type="text" name="keterangan" class="input-field" placeholder="Masukkan keterangan" value="{{ old('harga', $asset->keterangan) }}">
        </div>

        <div class="button-group">
            <a href="{{ route('admin.ekstra') }}" class="btn btn-cancel">Batal</a>
            <button type="submit" class="btn btn-submit">Perbarui</button>
        </div>
    </form>

@endsection
