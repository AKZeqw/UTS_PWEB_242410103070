<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Toko Barang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard', ['username' => request('username')]) }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengelolaan', ['username' => request('username')]) }}">Pengelolaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile', ['username' => request('username')]) }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="#" onclick="confirmLogout(event)">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
