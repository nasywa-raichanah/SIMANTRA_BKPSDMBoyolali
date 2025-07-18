<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMANTRA</title>
    <link rel="icon" href="{{ asset('image/logo_boyolali.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="left-section">
            <div class="header">
                <div class="logo"><img src="{{ asset('image/logo_boyolali.png') }}" alt="Logo"></div>
                <div class="nama-instansi">
                    <h1>Badan Kepegawaian dan Pengembangan<br>Sumber Daya Manusia</h1>
                    <h2>Kabupaten Boyolali</h2>
                </div>
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
                    <button type="submit" class="btn-signin">LOGIN</button>
                </form>
            </div>


        </div>
        <div class="right-section">
            <div class="contact-info">
                <div>✉︎ bkpsdm@boyolali.go.id</div>
                <div>☎ (0276) 321005</div>
            </div>


            <div class="right-content">
                <div class="register">Belum punya akun?</div>
                <a href="{{ route('register') }}" class="btn-signup">SIGN UP</a>
            </div>

            <a href="{{ route('admin.login') }}" class="btn-admin">Login Admin</a>
            
        </div>
    </div>
</body>
</html>
