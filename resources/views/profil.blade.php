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
            @if(session('success'))
                <div id="success-alert" class="alert success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div id="error-alert" class="alert error">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif


        <a href="javascript:history.back()" class="back-btn">Kembali</a>

        <div class="profil">Profil</div>

        <!-- Foto Profil -->
        <div class="foto-profil">
            <img id="previewImage" src="{{ asset('storage/' . $user->photo) }}" alt="Foto Profil" width="150">
        </div>

        <!-- Form Upload Foto Profil -->
        <form action="{{ route('profile.updatePhoto') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <!-- Input File (Hidden) -->
            <input type="file" id="photoInput" name="photo" style="display: none;" onchange="previewImage(event)">

            <!-- Tombol Pilih Foto -->
            <button type="button" class="ubah-foto-btn" onclick="document.getElementById('photoInput').click()">
                Pilih Foto
            </button>

            <!-- Tombol Submit -->
            <button type="submit" class="ubah-foto-btn">Upload</button>
        </form>

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

    <!-- JavaScript untuk Preview Gambar -->
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('previewImage').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>

</body>

</html>


    <!-- Tombol Edit Password -->
    <div class="button-container">
        <button onclick="openModal()" class="edit-password-btn">Edit Password</button>
    </div>

    <!-- Modal Pop-up -->
    <div id="passwordModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Ubah Password</h2>

            <form action="{{ route('profile.updatePassword') }}" method="POST" onsubmit="return validatePassword()">
                @csrf
                <div class="mb-4">
                    <label class="label">Password lama</label>
                    <input class="input-field" type="password" id="current_password" name="current_password" placeholder="Masukkan password lama" required>
                </div>

                <div class="mb-4">
                    <label class="label">Password baru</label>
                    <input class="input-field" type="password" id="new_password" name="new_password" placeholder="Masukkan password baru" required>
                </div>

                <div class="mb-4">
                    <label class="label">Konfirmasi Password baru</label>
                    <input class="input-field" type="password" id="new_password_confirmation" name="new_password_confirmation" placeholder="Masukkan konfirmasi password baru" required>
                </div>  

                <button type="submit" class="save-btn">Simpan</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const alertBox = document.getElementById('success-alert');
            if (alertBox) {
                setTimeout(() => {
                    alertBox.style.display = 'none';
                }, 5000); // Menghilangkan notifikasi setelah 3 detik
            }
            const errorAlert = document.getElementById('error-alert');
            if (errorAlert) {
                setTimeout(() => {
                    errorAlert.style.display = 'none';
                }, 5000); // Menghilangkan setelah 5 detik
            }
        });

        

        function openModal() {
            document.getElementById('passwordModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('passwordModal').style.display = 'none';
        }

        function validatePassword() {
            const newPassword = document.getElementById('new_password').value;
            const confirmPassword = document.getElementById('new_password_confirmation').value;

            if (newPassword.length < 6) {
                alert("Password baru harus minimal 6 karakter!");
                return false;
            }

            if (newPassword !== confirmPassword) {
                alert("Konfirmasi password tidak cocok!");
                return false;
            }

            return true;
        }
    </script>
