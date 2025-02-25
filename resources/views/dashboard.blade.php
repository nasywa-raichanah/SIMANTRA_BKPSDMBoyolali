@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
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
                    <h3>{{ $goodAssets }}</h3>
                    <p>Aset Baik</p>
                    <div class="card-info">
                        <span>Aset Kondisi Baik</span>
                        <span>{{ $totalAssets > 0 ? round(($goodAssets / $totalAssets) * 100, 2) . '%' : '0%' }}</span>
                    </div>
                </div>
                <div class="card">
                    <h3>{{ $badAssets }}</h3>
                    <p>Aset Rusak</p>
                    <div class="card-info">
                        <span>Aset Rusak</span>
                        <span>{{ $totalAssets > 0 ? round(($badAssets / $totalAssets) * 100, 2) . '%' : '0%' }}</span>
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    var kategoriData = @json(array_values($kategoriCounts));
    var kategoriLabels = @json(array_keys($kategoriCounts));
    
    var lokasiData = @json(array_values($lokasiCounts));
    var lokasiLabels = @json(array_keys($lokasiCounts));

    // Grafik Kategori Aset
    var ctxKategori = document.getElementById('kategoriChart').getContext('2d');
    new Chart(ctxKategori, {
        type: 'doughnut',
        data: {
            labels: kategoriLabels,
            datasets: [{
                label: 'Jumlah Aset',
                data: kategoriData,
                backgroundColor: [
                    "#B0E0E6", // Powder Blue
                    "#87CEFA", // Light Sky Blue
                    "#4682B4", // Steel Blue
                    "#5F9EA0", // Cadet Blue
                    "#00BFFF", // Deep Sky Blue
                    "#1E90FF", // Dodger Blue
                    "#4169E1", // Royal Blue
                    "#0000CD", // Medium Blue
                    "#00008B", // Dark Blue
                    "#191970"  // Midnight Blue
                ]
            }]
        }
    });

    // Grafik Lokasi Aset
    var ctxLokasi = document.getElementById('lokasiChart').getContext('2d');
    new Chart(ctxLokasi, {
        type: 'doughnut',
        data: {
            labels: lokasiLabels,
            datasets: [{
                label: 'Lokasi Aset',
                data: lokasiData,
                backgroundColor: [
                    "#B0E0E6", // Powder Blue
                    "#87CEFA", // Light Sky Blue
                    "#4682B4", // Steel Blue
                    "#5F9EA0", // Cadet Blue
                    "#00BFFF", // Deep Sky Blue
                    "#1E90FF", // Dodger Blue
                    "#4169E1", // Royal Blue
                    "#0000CD", // Medium Blue
                    "#00008B", // Dark Blue
                    "#191970"  // Midnight Blue
                ]

            }]
        }
    });
});
</script>

