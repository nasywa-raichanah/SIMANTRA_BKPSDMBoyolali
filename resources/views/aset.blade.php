@extends('layouts.app')

@section('content')
    <h1>Daftar Aset</h1>

    <table class="aset-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Aset</th>
                <th>Kategori</th>
                <th>Kondisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Laptop</td>
                <td>Elektronik</td>
                <td>Baik</td>
                <td><button class="btn">Detail</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Meja Kantor</td>
                <td>Furniture</td>
                <td>Baik</td>
                <td><button class="btn">Detail</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mobil Dinas</td>
                <td>Kendaraan</td>
                <td>Dalam Perawatan</td>
                <td><button class="btn">Detail</button></td>
            </tr>
        </tbody>
    </table>
@endsection
