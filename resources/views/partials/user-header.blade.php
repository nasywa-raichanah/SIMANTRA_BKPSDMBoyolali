<header class="header">
    <span class="header-text">Halo, {{ Auth::user()->name }}!</span>
    <a href="{{ route('profil') }}">
        <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : asset('image/icon-profile.png') }}"
            class="profile-icon" alt="Profile">
    </a>
</header>