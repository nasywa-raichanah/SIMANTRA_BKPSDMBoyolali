@extends('layouts.user')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/tambahaset.css') }}">

    <p>Tambah Barang</p>

    <form action="{{ route('admin.ekstra.store') }}" method="POST">
        @csrf
        
        <div class="mb-4">
            <label class="label">Kode Barang</label>
            <input type="text" name="kode_barang" class="input-field" placeholder="Masukkan kode barang">
        </div>

        <div class="mb-4">
            <label class="label">Nama Barang</label>
            <input type="text" name="nama_barang" class="input-field" placeholder="Masukkan nama barang">
        </div>

        <div class="mb-4">
            <label class="label">Nomor Register</label>
            <input type="text" name="nomor_register" class="input-field" placeholder="Masukkan kode barang">
        </div>

        <div class="mb-4">
            <label class="label">Merk/Type</label>
            <input type="text" name="merk_type" class="input-field" placeholder="Masukkan kode barang">
        </div>
        
        <div class="mb-4">
            <label class="label">Bahan</label>
            <select name="bahan" class="input-field-v">
                <option value="">Pilih Bahan</option>
                <option value="Besi">Besi</option>
                <option value="Alumunium">Alumunium</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Kayu">Kayu</option>
                <option value="Kaca">Kaca</option>
                <option value="Plastik">Plastik</option>
                <option value="Campuran">Campuran</option>
                <option value="-">-</option>
            </select>
        </div>
        
        <div class="mb-4">
            <label class="label">Tahun Pembelian</label>
            <input type="text" name="tahun_pembelian" class="input-field" placeholder="Masukkan tahun pembelian">
        </div>
        
        <div class="mb-4">
            <label class="label">Harga</label>
            <input type="text" name="harga" class="input-field" placeholder="Masukkan harga">
        </div>

        <div class="mb-4">
            <label class="label">Keterangan</label>
            <input type="text" name="keterangan" class="input-field" placeholder="Masukkan keterangan">
        </div>
        
        <div class="button-group">
            <a href="{{ route('admin.ekstra') }}" class="btn btn-cancel">Cancel</a>
            <button type="submit" class="btn btn-submit">Simpan</button>
        </div>
    </form>

@endsection
