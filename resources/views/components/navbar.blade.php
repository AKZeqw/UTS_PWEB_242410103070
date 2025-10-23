<style>
    .navbar {
        margin: 0 !important;
        padding: 0 !important;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .navbar-brand {
        font-size: 22px;
        font-weight: 700;
        transition: all 0.3s ease;
        position: relative;
    }

    .navbar-brand:hover {
        color: #ffeb3b !important;
        transform: scale(1.05);
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }

    .navbar-nav {
        gap: 5px;
    }

    .nav-link {
        padding: 10px 20px !important;
        margin: 0 5px;
        border-radius: 8px;
        transition: all 0.3s ease;
        position: relative;
        font-weight: 500;
    }

    .nav-link:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .nav-link.active {
        background: rgba(255, 255, 255, 0.3);
        font-weight: 600;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 3px;
        background: #ffeb3b;
        border-radius: 2px;
        transition: width 0.3s ease;
    }

    .nav-link:hover::after {
        width: 70%;
    }

    .nav-link.text-warning {
        font-weight: 600;
    }

    .nav-link.text-warning:hover {
        background: rgba(255, 193, 7, 0.2);
        color: #ffd54f !important;
        transform: translateY(-2px) scale(1.05);
    }

    .navbar-toggler {
        border: 2px solid rgba(255, 255, 255, 0.5);
        transition: all 0.3s ease;
    }

    .navbar-toggler:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: white;
        transform: rotate(90deg);
    }

    .navbar .container {
        padding: 8px 15px;
    }

    @media (max-width: 991px) {
        .nav-link {
            margin: 5px 0;
        }

        .nav-link::after {
            display: none;
        }
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard', ['username' => request('username')]) }}">
            <i class="fa-solid fa-store me-2"></i>Toko Barang
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" 
                        href="{{ route('dashboard', ['username' => request('username')]) }}">
                        <i class="fa-solid fa-house me-1"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pengelolaan') ? 'active' : '' }}" 
                        href="{{ route('pengelolaan', ['username' => request('username')]) }}">
                        <i class="fa-solid fa-box me-1"></i>Pengelolaan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" 
                        href="{{ route('profile', ['username' => request('username')]) }}">
                        <i class="fa-solid fa-user me-1"></i>Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="#" onclick="confirmLogout(event)">
                        <i class="fa-solid fa-right-from-bracket me-1"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
