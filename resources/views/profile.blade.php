@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px; font-size: 48px;">
                            {{ strtoupper(substr($username, 0, 1)) }}
                        </div>
                    </div>
                    <h3>{{ $username }}</h3>
                    <p class="text-muted">Admin Toko</p>
                    <hr>
                    <div class="text-start">
                        <p><strong>Username:</strong> {{ $username }}</p>
                        <p><strong>Role:</strong> Admin</p>
                        <p><strong>Status:</strong> Aktif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
