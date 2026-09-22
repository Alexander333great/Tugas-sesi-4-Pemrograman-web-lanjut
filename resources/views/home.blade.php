@extends('layouts.app')

@section('title', 'Halaman Utama')

@section('content')
<section class="hero py-5 bg-primary text-white text-center">
    <div class="container py-5">
        <h1 class="display-4 fw-bold">Selamat Datang di Web Profile</h1>
        <p class="lead">Halo! Ini adalah halaman utama website profil saya menggunakan Laravel 12.</p>
        <a href="{{ route('about') }}" class="btn btn-light btn-lg mt-3">Lihat Tentang Saya</a>
    </div>
</section>
@endsection