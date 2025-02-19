@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <div class="dashboard-container">

        <!-- Main Content -->
        <div class="main-content">

            <!-- Cards -->
            <div class="cards-container">
                <div class="card">
                    <h3>1.000</h3>
                    <p>Semua Aset</p>
                    <div class="card-info">
                        <span>Aset Semua Aset</span>
                        <span>100%</span>
                    </div>
                </div>
                <div class="card">
                    <h3>980</h3>
                    <p>Aset Baik</p>
                    <div class="card-info">
                        <span>Aset Kondisi Baik</span>
                        <span>100%</span>
                    </div>
                </div>
                <div class="card">
                    <h3>20</h3>
                    <p>Pemeliharaan</p>
                    <div class="card-info">
                        <span>Aset Rusak</span>
                        <span>100%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
