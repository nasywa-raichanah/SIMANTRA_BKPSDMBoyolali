<div class="sidebar">
    <div class="sidebar-header">
        <h2>SIMANTRA</h2>
        <button class="menu-toggle">☰</button>
    </div>
    <ul class="menu">
        <li><a href="{{ route('dashboard') }}"><img src="{{ asset('image/dashboard.png') }}" class="icon"> <span class="menu-text">Dashboard</span></a></li>
        <li><a href="{{ route('aset.index') }}"><img src="{{ asset('image/aset.png') }}" class="icon"> <span class="menu-text">Aset</span></a></li>
        <li><img src="{{ asset('image/file.png') }}" class="icon"> <span class="menu-text">Laporan</span></li>
        <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <img src="{{ asset('image/logout.png') }}" class="icon"><span class="menu-text">Logout</span>
            </a>
        </li>

    </ul>
</div>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sidebar = document.querySelector(".sidebar");
            const toggleButton = document.querySelector(".menu-toggle");
            const sidebarTitle = document.querySelector(".sidebar h2"); // Ambil elemen SIMANTRA
            const menuTexts = document.querySelectorAll(".menu-text");

            toggleButton.addEventListener("click", function () {
                sidebar.classList.toggle("small");

                // Sembunyikan teks saat sidebar mengecil
                if (sidebar.classList.contains("small")) {
                    sidebarTitle.style.display = "none"; // Hilangkan teks SIMANTRA
                    menuTexts.forEach(text => text.style.display = "none");
                } else {
                    sidebarTitle.style.display = "block"; // Tampilkan kembali teks SIMANTRA
                    menuTexts.forEach(text => text.style.display = "inline");
                }
            });
        });
    </script>
@endpush