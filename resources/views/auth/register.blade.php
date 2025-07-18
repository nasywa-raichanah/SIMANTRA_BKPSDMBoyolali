<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMANTRA - Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="register-container">
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

            <div class="login">Kembali ke Halaman Login</div>
            <a href="{{ route('login') }}" class="btn-signin">SIGN IN</a>
        </div>
        <div class="right-section">
            <div class="contact-info">
                <p>
                    <i class="icon"></i>✉
                    <i class="fas fa-envelope"></i> bkpsdm@boyolali.go.id
                    <i class="icon"></i>☎
                    <i class="fas fa-phone"></i> (0276) 321005
                </p>
            </div>
            <div class="register-form">
                <div class="judul-website">SIMANTRA</div>
                <div class="judul-website-2">Sistem Manajemen Inventaris Terpadu</div>
                <form action="{{ url('register') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="name" placeholder="Nama Lengkap" required>
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
                    <button type="submit" class="btn-signup">REGISTER</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Registrasi Gagal!',
                text: 'Pastikan semua data diisi dengan benar dan password sesuai.',
                html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
                confirmButtonText: 'OK'
            });
        @endif
    </script>

    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session("success") }}',
            });
        @endif
    </script>

</body>

</html>