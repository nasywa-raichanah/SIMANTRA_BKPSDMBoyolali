@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <div class="dashboard-container">
        <div class="main-content">
            <div class="cards-container">
                <div class="card">
                    <h3>{{ $totalAssets }}</h3>
                    <p>Semua Aset</p>
                    <div class="card-info">
                        <span>Aset Semua Aset</span>
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
                    <p>Pemeliharaan</p>
                    <div class="card-info">
                        <span>Aset Rusak</span>
                        <span>{{ $totalAssets > 0 ? round(($badAssets / $totalAssets) * 100, 2) . '%' : '0%' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
