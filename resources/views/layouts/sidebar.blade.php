<div class="sidebar">
    <div class="sidebar-header">
        <h2>SIMANTRA</h2>
        <button class="menu-toggle">☰</button>
    </div>
    <ul class="menu">
        <li><a href="{{ route('dashboard') }}"><i class="icon">🏠</i> <span class="menu-text">Dashboard</span></a></li>
        <li><a href="{{ route('aset') }}"><i class="icon">📦</i> <span class="menu-text">Aset</span></a></li>
        <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="icon">🔄</i> <span class="menu-text">Logout</span>
            </a>
        </li>

    </ul>
</div>
