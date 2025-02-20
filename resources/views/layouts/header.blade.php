<header class="header">
    <span class="header-text">{{ Auth::user()->name }}</span>
    <a href="{{ route('profil') }}">
        <img src="{{ asset(Auth::user()->photo ?? 'image/icon-profile.png') }}" class="profile-icon" alt="Profile">
    </a>
</header>
