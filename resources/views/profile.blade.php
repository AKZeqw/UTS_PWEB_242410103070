@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<style>
    .profile-container {
        padding: 40px 0;
        background: linear-gradient(180deg, #c3cfe2 0%, #f5f7fa 100%);
        min-height: calc(100vh - 56px);
    }

    .profile-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        animation: zoomIn 0.5s ease-out;
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .profile-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 50px 30px;
        text-align: center;
        position: relative;
    }

    .profile-header::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 30px;
        background: white;
        border-radius: 50% 50% 0 0;
    }

    .profile-avatar {
        width: 120px;
        height: 120px;
        background: white;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 56px;
        font-weight: 700;
        color: #667eea;
        margin-bottom: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        animation: pulse 2s infinite;
        position: relative;
        z-index: 1;
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    .profile-header h3 {
        color: white;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 5px;
        position: relative;
        z-index: 1;
    }

    .profile-header .badge {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 600;
        border: 2px solid white;
        position: relative;
        z-index: 1;
    }

    .profile-body {
        padding: 50px 40px 40px;
    }

    .profile-info-item {
        display: flex;
        align-items: center;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 12px;
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    .profile-info-item:hover {
        background: #e9ecef;
        transform: translateX(5px);
    }

    .profile-info-item .icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 20px;
        margin-right: 20px;
    }

    .profile-info-item .content {
        flex: 1;
    }

    .profile-info-item .label {
        font-size: 12px;
        color: #999;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .profile-info-item .value {
        font-size: 18px;
        color: #333;
        font-weight: 600;
    }

    .profile-actions {
        padding: 0 40px 40px;
        display: flex;
        gap: 15px;
    }

    .btn-profile {
        flex: 1;
        padding: 15px;
        border-radius: 12px;
        font-weight: 600;
        font-size: 15px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .btn-primary-profile {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .btn-primary-profile:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.4);
    }

    .btn-outline-profile {
        background: white;
        color: #667eea;
        border: 2px solid #667eea;
    }

    .btn-outline-profile:hover {
        background: #667eea;
        color: white;
    }

    @media (max-width: 768px) {
        .profile-body {
            padding: 30px 20px 20px;
        }
        
        .profile-actions {
            padding: 0 20px 30px;
            flex-direction: column;
        }
        
        .profile-info-item {
            padding: 15px;
        }
    }
</style>

<div class="profile-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="profile-card">
                    <div class="profile-header">
                        <div class="profile-avatar">
                            {{ strtoupper(substr($username, 0, 1)) }}
                        </div>
                        <h3>{{ $username }}</h3>
                        <span class="badge">
                            <i class="fa-solid fa-crown me-1"></i>Administrator
                        </span>
                    </div>
                    <div class="profile-body">
                        <div class="profile-info-item">
                            <div class="icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="content">
                                <div class="label">Username</div>
                                <div class="value">{{ $username }}</div>
                            </div>
                        </div>
                        <div class="profile-info-item">
                            <div class="icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="content">
                                <div class="label">Role</div>
                                <div class="value">Administrator</div>
                            </div>
                        </div>
                        <div class="profile-info-item">
                            <div class="icon">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <div class="content">
                                <div class="label">Status</div>
                                <div class="value">
                                    <span style="color: #11998e;">
                                        <i class="fa-solid fa-circle" style="font-size: 8px; margin-right: 5px;"></i>
                                        Aktif
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="profile-info-item">
                            <div class="icon">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="content">
                                <div class="label">Bergabung Sejak</div>
                                <div class="value">Oktober 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-actions">
                        <button class="btn-profile btn-primary-profile">
                            <i class="fa-solid fa-pen-to-square"></i>
                            Edit Profile
                        </button>
                        <button class="btn-profile btn-outline-profile">
                            <i class="fa-solid fa-gear"></i>
                            Settings
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
