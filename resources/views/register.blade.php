<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMANTRA - Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="right-section">
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
        <div class="left-section">
            <div class="contact-info">
                <p>
                    <i class="fas fa-envelope"></i> bkpsdm@boyolali.go.id 
                    <i class="fas fa-phone"></i> (0276) 321005
                </p>
            </div>
            <div class="register-form">
                <div class="judul-website">SIMANTRA</div>
                <div class="judul-website-2">Sistem Manajemen Inventaris Terpadu</div>
                @if ($errors->any())
                    <div class="error-message">
                        <strong>{{ $errors->first('register') }}</strong>
                    </div>
                @endif
                <form action="{{ url('register') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="name" placeholder="Full Name" required>
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" placeholder="Email" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="input-group">
                        <input type="text" name="nip" placeholder="Nomor Induk Pegawai" required>
                        <i class="fas fa-id-badge"></i>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="input-group">
                    <label for="profile_picture">Upload Foto Profil</label>
                        <input type="file" name="profile_picture" accept="image/*" placeholder="Foto Profil" required>
                    </div>
                    <button type="submit" class="btn-signin">REGISTER</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
