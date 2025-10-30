@extends('layouts.app')

@section('title', 'Home - My Laravel App')

@push('styles')
<style>
    .hero-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 100px 0;
        text-align: center;
    }
    .feature-card {
        transition: transform 0.3s;
        height: 100%;
    }
    .feature-card:hover {
        transform: translateY(-10px);
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="display-3 fw-bold mb-4">
            <i class="bi bi-heart-fill text-danger"></i> Love My Teacher <i class="bi bi-heart-fill text-danger"></i>
        </h1>
        <p class="lead mb-5">Bienvenue sur notre plateforme d'apprentissage</p>
        <button class="btn btn-light btn-lg px-5" onclick="showLove()">
            <i class="bi bi-heart"></i> Click the Heart
        </button>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Nos Fonctionnalités</h2>
        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-md-4">
                <div class="card feature-card shadow">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-book text-primary" style="font-size: 3rem;"></i>
                        <h5 class="card-title mt-3">Apprendre</h5>
                        <p class="card-text">Accédez à des ressources pédagogiques de qualité.</p>
                    </div>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-md-4">
                <div class="card feature-card shadow">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-people text-success" style="font-size: 3rem;"></i>
                        <h5 class="card-title mt-3">Communauté</h5>
                        <p class="card-text">Rejoignez une communauté d'apprenants passionnés.</p>
                    </div>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-md-4">
                <div class="card feature-card shadow">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-trophy text-warning" style="font-size: 3rem;"></i>
                        <h5 class="card-title mt-3">Réussir</h5>
                        <p class="card-text">Atteignez vos objectifs avec nos outils.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Links -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h3 class="mb-4">Commencez Maintenant</h3>
                <div class="d-grid gap-2">
                    <a href="{{ route('form.create') }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-file-text"></i> Remplir le Formulaire
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function showLove() {
        Swal.fire({
            title: '💖 Love My Teacher 💖',
            text: 'Teachers inspire, guide, and transform lives!',
            icon: 'success',
            confirmButtonText: 'Awesome!',
            confirmButtonColor: '#764ba2',
            showClass: {
                popup: 'animate__animated animate__heartBeat'
            }
        });
    }
</script>
@endpush