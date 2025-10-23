@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<style>
    .dashboard-container {
        padding: 40px 0;
        min-height: auto;
    }

    .welcome-card {
        background: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        animation: slideDown 0.6s ease-out;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .welcome-card h2 {
        color: #667eea;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .welcome-card .username {
        color: #764ba2;
        font-weight: 600;
    }

    .welcome-card p {
        color: #666;
        font-size: 16px;
    }

    .stats-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        margin-bottom: 20px;
        position: relative;
        overflow: hidden;
    }

    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .stats-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
    }

    .stats-card.primary::before {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .stats-card.success::before {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    }

    .stats-card.info::before {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }

    .stats-card .icon {
        font-size: 48px;
        margin-bottom: 15px;
        opacity: 0.8;
    }

    .stats-card.primary .icon {
        color: #667eea;
    }

    .stats-card.success .icon {
        color: #11998e;
    }

    .stats-card.info .icon {
        color: #4facfe;
    }

    .stats-card h5 {
        color: #666;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .stats-card h2 {
        color: #333;
        font-size: 36px;
        font-weight: 700;
        margin: 0;
    }

    .stats-card p {
        color: #999;
        font-size: 13px;
        margin-top: 10px;
        margin-bottom: 0;
    }

    @media (max-width: 768px) {
        .welcome-card {
            padding: 25px;
        }
        
        .welcome-card h2 {
            font-size: 24px;
        }
        
        .stats-card {
            padding: 20px;
        }
    }
</style>

<div class="dashboard-container">
    <div class="container">
        <div class="welcome-card">
            <h2>Selamat datang, <span class="username">{{ $username }}</span>! 👋</h2>
            <p><i class="fa-solid fa-store me-2"></i>Sistem Manajemen Barang Toko</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="stats-card primary">
                    <div class="icon">
                        <i class="fa-solid fa-box"></i>
                    </div>
                    <h5>Total Barang</h5>
                    <h2>6 <small style="font-size: 18px; color: #999;">Item</small></h2>
                    <p><i class="fa-solid fa-chart-line me-1"></i>Data terupdate</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card success">
                    <div class="icon">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <h5>Kategori</h5>
                    <h2>3 <small style="font-size: 18px; color: #999;">Jenis</small></h2>
                    <p><i class="fa-solid fa-list me-1"></i>Makanan, Minuman, Kebersihan</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card info">
                    <div class="icon">
                        <i class="fa-solid fa-warehouse"></i>
                    </div>
                    <h5>Total Stok</h5>
                    <h2>660 <small style="font-size: 18px; color: #999;">Unit</small></h2>
                    <p><i class="fa-solid fa-check-circle me-1"></i>Stok tersedia</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
