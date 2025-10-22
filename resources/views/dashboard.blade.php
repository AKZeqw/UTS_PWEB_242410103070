@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h2>Selamat datang, {{ $username }}!</h2>
            <p class="text-muted">Sistem Manajemen Barang Toko</p>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Barang</h5>
                    <h2>6 Item</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Kategori</h5>
                    <h2>3 Jenis</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Stok</h5>
                    <h2>660 Unit</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
