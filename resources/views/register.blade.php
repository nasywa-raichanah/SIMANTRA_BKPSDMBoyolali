<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - SIMANTRA</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="left-section">
            <div class="header">
                <div class="logo">
                <img src="{{ asset('image/logo_boyolali.png') }}" alt="Logo">
                </div>
                <div class="nama-instansi">
                    <h1>Badan Kepegawaian dan Pengembangan<br>Sumber Daya Manusia</h1>
                    <h2>Kabupaten Boyolali</h2>
                </div>
            </div>

            <button class="btn-signup">SIGN UP</button>
        </div>
        <div class="right-section">
            <div class="contact-info">
                <p>
                    <i class="fas fa-envelope"></i> bkpsdm@boyolali.go.id 
                    <i class="fas fa-phone"></i> (0276) 321005
                </p>
            </div>
            <div class="login-form">
                <div class="judul-website">SIMANTRA</div>
                <div class="judul-website-2">Sistem Manajemen Inventaris Terpadu</div>
                @if ($errors->any())
                    <div class="error-message">
                        <strong>{{ $errors->first('login') }}</strong>
                    </div>
                @endif
                <form action="{{ url('/') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="nip" placeholder="Nomor Induk Pegawai" required>
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                    <button type="submit" class="btn-signin">SIGN IN</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
