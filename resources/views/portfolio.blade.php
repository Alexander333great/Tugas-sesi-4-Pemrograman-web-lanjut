@extends('layouts.app')

@section('title', 'Portofolio Saya')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Portofolio Project</h2>
        <p class="text-muted">Berikut adalah beberapa project dan aplikasi yang pernah saya kembangkan.</p>
    </div>

    <div class="row">
        @foreach($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="bg-secondary text-white text-center d-flex align-items-center justify-content-center" style="height: 180px;">
                        <span>Thumbnail Project</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-primary mb-2 align-self-start">{{ $project['category'] }}</span>
                        <h5 class="card-title fw-bold">{{ $project['title'] }}</h5>
                        <p class="card-text text-muted">{{ $project['description'] }}</p>
                        <a href="#" class="btn btn-outline-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection