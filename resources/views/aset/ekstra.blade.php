@extends('layouts.user')

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
                            <form method="GET" action="{{ route('aset.ekstra') }}" class="search-form">
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
        </div>
    </div>
@endsection
