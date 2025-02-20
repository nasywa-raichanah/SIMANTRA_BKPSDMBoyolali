<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMANTRA - Profil Akun</title>
    <link rel="icon" href="{{ asset('image/logo_boyolali.png') }}">
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
</head>
<body>

    <div class="form">
        <a href="{{ url()->previous() }}" class="back-btn">Kembali</a>

        <div class="profil">Profil</div>

        <div class="foto-profil">
            <img src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('image/default-profile.png') }}" alt="Foto Profil">
        </div>

        <div class="nama-nip">
            <div class="nama">
                <div class="hal-profil">Nama</div>
                <div class="isi-profil">{{ $user->name }}</div>
            </div>
            <div class="nip">
                <div class="hal-profil">NIP</div>
                <div class="isi-profil">{{ $user->nip }}</div>
            </div>
        </div>

        <!-- Pindahkan tombol ke bawah -->
        <div class="button-container">
            <button class="edit-password-btn">Edit Password</button>
        </div>
    </div>
</body>
</html>
