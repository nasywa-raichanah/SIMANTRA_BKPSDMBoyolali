@extends('layouts.admin')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="dashboard-container">
        <div class="main-content">
            <div class="cards-container">
                <div class="card">
                    <h3>{{ $totalAssets }}</h3>
                    <p>Semua Aset</p>
                    <div class="card-info">
                        <span>Semua Aset</span>
                        <span>{{ $totalAssets > 0 ? '100%' : '0%' }}</span>
                    </div>
                </div>
                <div class="card">
                    <h3>{{ $totalIntra }}</h3>
                    <p>Aset Intra Kompatabel</p>
                    <div class="card-info">
                        <span>Aset Intra Kompatabel</span>
                        <span>{{ $totalIntra > 0 ? round(($totalIntra / $totalAssets) * 100, 2) . '%' : '0%' }}</span>
                    </div>
                </div>
                <div class="card">
                    <h3>{{ $totalEkstra }}</h3>
                    <p>Aset Ekstra Kompatabel</p>
                    <div class="card-info">
                        <span>Aset Ekstra Kompatabel</span>
                        <span>{{ $totalEkstra > 0 ? round(($totalEkstra / $totalAssets) * 100, 2) . '%' : '0%' }}</span>
                    </div>
                </div>
            </div>

            <div class="charts-container">
                <div class="chart-card">
                    <h3>Kategori Aset</h3>
                    <canvas id="kategoriChart"></canvas>
                </div>
                <div class="chart-card">
                    <h3>Lokasi Aset</h3>
                    <canvas id="lokasiChart"></canvas>
                </div>
            </div>


        </div>
    </div>

@endsection



