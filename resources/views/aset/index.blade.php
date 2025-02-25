@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/aset.css') }}">

    <div class="aset-container">

        <!-- Main Content -->
        <div class="main-content">

            <!-- Cards -->
            <div class="cards-container">
                <div class="card">
                <div class="header-section">
                    <p class="title">Laporan Inventaris dan Aset</p>
                    <div class="search-sort-container">
                        <form method="GET" action="{{ route('aset.index') }}" class="search-form">
                            <div class="search-box">
                                <input type="text" name="search" placeholder="Cari aset..." value="{{ request('search') }}">
                                <button type="submit">
                                    <img src="{{ asset('image/search.png') }}" alt="Cari">
                                </button>
                            </div>
                        </form>
                        <form method="GET" action="{{ route('aset.index') }}" class="sort-form">
                            <select name="sort" onchange="this.form.submit()">
                                <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Terbaru</option>
                                <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Terlama</option>
                            </select>
                        </form>
                    </div>
                </div>

                    <table class="inventory-table">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Kode Barang</th>
                                <th>Kategori</th>
                                <th>Lokasi</th>
                                <th class="filter-header">
                                    <form method="GET" action="{{ route('aset.index') }}">
                                        <select class="kondisi" name="kondisi" class="filter-dropdown" onchange="this.form.submit()">
                                            <option value="">Kondisi</option>
                                            <option value="Baik" {{ request('kondisi') == 'Baik' ? 'selected' : '' }}>Baik</option>
                                            <option value="Rusak" {{ request('kondisi') == 'Rusak' ? 'selected' : '' }}>Rusak</option>
                                        </select>
                                    </form>
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($assets as $asset)
                                <tr>
                                    <td>{{ $asset->nama_barang }}</td>
                                    <td class="no-transform">{{ $asset->kode_barang }}</td>
                                    <td>{{ $asset->kategori }}</td>
                                    <td>{{ $asset->lokasi_barang }}</td>
                                    <td>{{ $asset->kondisi }}</td>
                                    <td>
                                        <a href="{{ route('aset.edit', $asset->id) }}" class="btn-action btn-edit">
                                            <img src="{{ asset('image/edit.png') }}" alt="Edit" style="width: 16px; height: 16px;">
                                        </a>

                                        <form action="{{ route('aset.destroy', $asset->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-action btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                                                <img src="{{ asset('image/delete.png') }}" alt="Hapus" style="width: 16px; height: 16px;">
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" style="text-align: center;">Tidak ada data aset tersedia</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- Pagination --}}
                    <div class="pagination-container">
                        {{ $assets->onEachSide(1)->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>

            <div class="table-actions">
                <a href="{{ route('aset.create') }}" class="btn-action btn-add">
                    <img src="{{ asset('image/plus.png') }}" alt="Tambah">
                    Tambah Data
                </a>
            </div>
        </div>
    </div>

@endsection
