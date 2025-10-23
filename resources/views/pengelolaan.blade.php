@extends('layouts.app')

@section('title', 'Pengelolaan Barang')

@section('content')
<style>
    .content {
        margin: 0 !important;
        padding: 0 !important;
    }

    .pengelolaan-wrapper {
        background: linear-gradient(180deg, #c3cfe2 0%, #f5f7fa 100%);
        padding: 40px 0;
        margin: 0 !important;
        width: 100%;
        min-height: calc(100vh - 56px - 70px);
    }

    .header-card {
        background: white;
        border-radius: 20px;
        padding: 30px 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        animation: slideDown 0.6s ease-out;
        display: flex;
        justify-content: space-between;
        align-items: center;
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

    .header-card h2 {
        color: #667eea;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .header-card p {
        color: #666;
        font-size: 14px;
        margin-bottom: 0;
    }

    .header-card .user-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 10px 20px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 14px;
    }

    .table-card {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        animation: fadeIn 0.8s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .table {
        margin-bottom: 0;
    }

    .table thead {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .table thead th {
        color: white;
        font-weight: 600;
        border: none;
        padding: 15px;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .table thead th:first-child {
        border-radius: 10px 0 0 0;
    }

    .table thead th:last-child {
        border-radius: 0 10px 0 0;
    }

    .table tbody tr {
        transition: all 0.3s ease;
        border-bottom: 1px solid #f0f0f0;
    }

    .table tbody tr:hover {
        background: #f8f9fa;
        transform: scale(1.01);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
    }

    .table tbody td {
        padding: 15px;
        vertical-align: middle;
        color: #333;
    }

    .badge-kategori {
        padding: 6px 12px;
        border-radius: 15px;
        font-size: 12px;
        font-weight: 600;
        display: inline-block;
    }

    .badge-makanan {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
    }

    .badge-minuman {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
    }

    .badge-kebersihan {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        color: white;
    }

    .stok-badge {
        padding: 6px 12px;
        border-radius: 15px;
        font-size: 13px;
        font-weight: 600;
    }

    .stok-banyak {
        background: #d4edda;
        color: #155724;
    }

    .stok-sedang {
        background: #fff3cd;
        color: #856404;
    }

    .stok-sedikit {
        background: #f8d7da;
        color: #721c24;
    }

    @media (max-width: 768px) {
        .header-card {
            flex-direction: column;
            align-items: flex-start;
            padding: 25px;
        }

        .header-card .user-badge {
            margin-top: 15px;
        }

        .table-card {
            padding: 20px;
            overflow-x: auto;
        }

        .table {
            font-size: 13px;
        }

        .table thead th,
        .table tbody td {
            padding: 10px;
        }
    }
</style>

<div class="pengelolaan-wrapper">
    <div class="container">
        <div class="header-card">
            <div>
                <h2><i class="fa-solid fa-box me-2"></i>Pengelolaan Barang Toko</h2>
                <p><i class="fa-solid fa-database me-2"></i>Daftar lengkap barang yang tersedia di toko</p>
            </div>
            <div class="user-badge">
                <i class="fa-solid fa-user me-2"></i>{{ $username }}
            </div>
        </div>
        <div class="table-card">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barangs as $barang)
                        <tr>
                            <td><strong>{{ $barang['id'] }}</strong></td>
                            <td>
                                <i class="fa-solid fa-cube me-2" style="color: #667eea;"></i>
                                <strong>{{ $barang['nama'] }}</strong>
                            </td>
                            <td>
                                @if($barang['kategori'] == 'Makanan')
                                    <span class="badge-kategori badge-makanan">
                                        <i class="fa-solid fa-utensils me-1"></i>{{ $barang['kategori'] }}
                                    </span>
                                @elseif($barang['kategori'] == 'Minuman')
                                    <span class="badge-kategori badge-minuman">
                                        <i class="fa-solid fa-mug-hot me-1"></i>{{ $barang['kategori'] }}
                                    </span>
                                @else
                                    <span class="badge-kategori badge-kebersihan">
                                        <i class="fa-solid fa-spray-can me-1"></i>{{ $barang['kategori'] }}
                                    </span>
                                @endif
                            </td>
                            <td>
                                @if($barang['stok'] >= 100)
                                    <span class="stok-badge stok-banyak">
                                        <i class="fa-solid fa-circle-check me-1"></i>{{ $barang['stok'] }} unit
                                    </span>
                                @elseif($barang['stok'] >= 50)
                                    <span class="stok-badge stok-sedang">
                                        <i class="fa-solid fa-circle-exclamation me-1"></i>{{ $barang['stok'] }} unit
                                    </span>
                                @else
                                    <span class="stok-badge stok-sedikit">
                                        <i class="fa-solid fa-triangle-exclamation me-1"></i>{{ $barang['stok'] }} unit
                                    </span>
                                @endif
                            </td>
                            <td>
                                <strong style="color: #667eea;">Rp {{ number_format($barang['harga'], 0, ',', '.') }}</strong>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
