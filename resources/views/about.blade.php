@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-4 text-center mb-4 mb-lg-0">
            <!-- Anda bisa mengganti foto profil di sini -->
            <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto shadow" style="width: 200px; height: 200px; font-size: 1.5rem;">
                Foto Profil
            </div>
        </div>
        <div class="col-lg-8">
            <h2 class="fw-bold mb-3">Tentang Saya</h2>
            <p class="text-muted lead">
                Halo! Saya adalah seorang mahasiswa yang sedang mendalami bidang Software Engineering dan pengembangan aplikasi web menggunakan Laravel.
            </p>
            <p>
                Website profil ini dibuat sebagai bagian dari pembelajaran praktikum untuk memahami konsep routing, controller, blade templating engine, serta integrasi Bootstrap dalam framework Laravel.
            </p>
            <div class="row mt-4">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>Nama:</strong> Mahasiswa Laravel</li>
                        <li class="mb-2"><strong>Bidang:</strong> Software Engineering</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>Status:</strong> Aktif Berkuliah</li>
                        <li class="mb-2"><strong>Keahlian:</strong> PHP, Laravel, Bootstrap</li>
                    </ul>
                </div>
            </div>
            <a href="{{ route('home') }}" class="btn btn-outline-primary mt-3">Kembali ke Beranda</a>
        </div>
    </div>
</div>
@endsection