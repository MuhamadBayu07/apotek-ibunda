@extends('layouts.app')


@section('contents')
<div class="container mt-5">
    <!-- Header Promosi -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-primary">Apotek XLAB</h1>
        <p class="lead text-muted">
            Aplikasi ini dibuat khusus untuk kami sebagai admin dalam mengelola data dan layanan apotek.
        </p>
    </div>

    <!-- Section Keunggulan Apotek -->
    <div class="row text-center g-4 mb-5">
        <!-- Keunggulan 1 -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4 h-100">
                <i class="fas fa-pills fa-3x text-primary mb-3"></i>
                <h5 class="fw-bold">Manajemen Produk</h5>
                <p class="text-muted">Mengelola berbagai obat-obatan dan alat kesehatan untuk kebutuhan apotek secara efisien.</p>
            </div>
        </div>
        <!-- Keunggulan 2 -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4 h-100">
                <i class="fas fa-shipping-fast fa-3x text-success mb-3"></i>
                <h5 class="fw-bold">Pengiriman Terkontrol</h5>
                <p class="text-muted">Memastikan proses pengiriman yang cepat dan tercatat dengan baik oleh admin.</p>
            </div>
        </div>
        <!-- Keunggulan 3 -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4 h-100">
                <i class="fas fa-user-md fa-3x text-warning mb-3"></i>
                <h5 class="fw-bold">Konsultasi Admin</h5>
                <p class="text-muted">Tim kami dapat memantau dan melayani konsultasi kesehatan dengan lebih sistematis.</p>
            </div>
        </div>
    </div>

    <!-- Section Informasi Khusus Admin -->
    <div class="text-center mb-5">
        <h2 class="fw-bold mb-4">Akses Khusus untuk Admin</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <blockquote class="blockquote p-4 bg-light shadow-sm rounded">
                    <p class="mb-3">"Aplikasi ini hanya dapat diakses oleh admin untuk mengelola seluruh kebutuhan apotek."</p>
                    <footer class="blockquote-footer">Tim Pengembang</footer>
                </blockquote>
            </div>
        </div>
    </div>

    <!-- CTA Login Admin -->
    <div class="text-center py-5 bg-primary text-white rounded shadow-lg">
        <h2 class="fw-bold mb-3">Masuk sebagai Admin</h2>
        <p class="lead">Silakan login untuk mulai mengelola data dan layanan apotek XLAB.</p>
        <a href="{{ route('login') }}" class="btn btn-light btn-lg px-4 shadow">Login Sekarang</a>
    </div>
</div>
@endsection