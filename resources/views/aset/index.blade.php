@extends('layouts.user')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/aset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

    <div class="aset-container">
        

        <!-- Main Content -->
        <div class="main-content">
            <div class="judul">REKAPITULASI KARTU INVENTARIS BARANG (KIB) B PERALATAN DAN MESIN</div>
            <div class="button-wrapper">
                <div class="button-index">
                    <a href="{{ route('aset.intra') }}" class="btn">A. Intra Kompatabel</a>
                    <a href="{{ route('aset.ekstra') }}" class="btn">B. Ekstra Kompatabel</a>
                </div>
            </div> 
        </div>  

@endsection