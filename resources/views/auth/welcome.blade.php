<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMANTRA</title>
    <link rel="icon" href="{{ asset('image/logo_boyolali.png') }}">
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
                <p>
                    <i class="icon"></i>✉︎
                    <i class="fas fa-envelope"></i>  bkpsdm@boyolali.go.id    
                    <i class="icon"></i>☎
                    <i class="fas fa-phone"></i> (0276) 321005
                </p>
            </div>

            <div class="register">Belum punya akun?</div>
            <a href="{{ route('register') }}" class="btn-signup">SIGN UP</a>

            <div class="login-admin">
                <a href="{{ route('admin.login') }}" class="btn-admin">Login Admin</a>
            </div>
            
        </div>
    </div>
</body>
</html>
