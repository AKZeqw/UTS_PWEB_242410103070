@extends('layouts.app')

@section('title', 'Pengelolaan Barang')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h2>Pengelolaan Barang Toko</h2>
            <p class="text-muted">User: {{ $username }}</p>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
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
                                <td>{{ $barang['id'] }}</td>
                                <td>{{ $barang['nama'] }}</td>
                                <td>{{ $barang['kategori'] }}</td>
                                <td>{{ $barang['stok'] }}</td>
                                <td>Rp {{ number_format($barang['harga'], 0, ',', '.') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
