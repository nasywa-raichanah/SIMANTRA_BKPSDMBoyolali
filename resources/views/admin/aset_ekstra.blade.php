@extends('layouts.admin')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/aset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

    <div class="aset-container">
        <div class="main-content">
            <div class="cards-container">
                <div class="card">
                    <div class="header-section">
                        <p class="title">Laporan Inventaris dan Aset - Ekstra Kompatabel</p>
                        <div class="search-sort-container">
                            <form method="GET" action="{{ route('admin.ekstra') }}" class="search-form">
                                <div class="search-box">
                                    <input type="text" name="search" placeholder="Cari aset..." value="{{ request('search') }}">
                                    <button type="submit">
                                        <img src="{{ asset('image/search.png') }}" alt="Cari">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <table class="inventory-table">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Nomor Registrasi</th>
                                <th>Merk/Type</th>
                                <th>Bahan</th>
                                <th>Tahun Pembelian</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($ekstra as $item)
                                <tr>
                                    <td>{{ $item->kode_barang }}</td>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->nomor_register }}</td>
                                    <td>{{ $item->merk_type }}</td>
                                    <td>{{ $item->bahan }}</td>
                                    <td>{{ $item->tahun_pembelian }}</td>
                                    <td>Rp {{ $item->harga }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="{{ route('admin.ekstra.edit', $item->id) }}" class="btn-action btn-edit">
                                                <img src="{{ asset('image/edit.png') }}" alt="Edit" style="width: 16px; height: 16px;">
                                            </a>

                                            <form action="{{ route('admin.ekstra.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-action btn-delete"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                                                    <img src="{{ asset('image/delete.png') }}" alt="Hapus" style="width: 16px; height: 16px;">
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" style="text-align: center;">Tidak ada data aset tersedia</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- Pagination --}}
                    <div class="pagination-container">
                        {{ $ekstra->onEachSide(1)->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>

            <div class="table-actions">
                <a href="{{ route('admin.ekstra.create') }}" class="btn-action btn-add">
                    <img src="{{ asset('image/plus.png') }}" alt="Tambah">
                    Tambah Data
                </a>
            </div>
        </div>
    </div>
@endsection
