@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/tambahaset.css') }}">

    <p>Tambah Barang</p>

    <form action="{{ route('aset.store') }}" method="POST">
        @csrf
        
        <div class="mb-4">
            <label class="label">Nama Barang</label>
            <input type="text" name="nama_barang" class="input-field" placeholder="Masukkan nama barang">
        </div>
        
        <div class="mb-4">
            <label class="label">Kode Barang</label>
            <input type="text" name="kode_barang" class="input-field" placeholder="Masukkan kode barang">
        </div>
        
        <div class="mb-4">
            <label class="label">Kategori</label>
            <select name="kategori" class="input-field-v">
                <option value="">Pilih Kategori</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Furniture">Furniture</option>
            </select>
        </div>
        
        <div class="mb-4">
            <label class="label">Lokasi Barang</label>
            <input type="text" name="lokasi_barang" class="input-field" placeholder="Masukkan lokasi barang">
        </div>
        
        <div class="mb-4">
            <label class="label">Kondisi</label>
            <select name="kondisi" class="input-field-v">
                <option value="">Pilih Kondisi</option>
                <option value="Baik">Baik</option>
                <option value="Rusak">Rusak</option>
            </select>
        </div>
        
        <div class="button-group">
            <a href="{{ route('aset.index') }}" class="btn btn-cancel">Cancel</a>
            <button type="submit" class="btn btn-submit">Simpan</button>
        </div>
    </form>

@endsection
