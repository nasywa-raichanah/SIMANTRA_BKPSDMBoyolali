@extends('layouts.user')

@section('content')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
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