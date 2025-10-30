@extends('layouts.app')

@section('title', 'Informations reçues')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">
                        <i class="bi bi-check-circle"></i> Informations reçues
                    </h3>
                </div>
                <div class="card-body p-4">
                    <div class="alert alert-success" role="alert">
                        <i class="bi bi-check-lg"></i> Vos informations ont été enregistrées avec succès!
                    </div>

                    <div class="info-box bg-light p-4 rounded">
                        <div class="row mb-3">
                            <div class="col-4 fw-bold">Nom:</div>
                            <div class="col-8">{{ $nom }}</div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-4 fw-bold">Prénom:</div>
                            <div class="col-8">{{ $prenom }}</div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-4 fw-bold">Âge:</div>
                            <div class="col-8">{{ $age }} ans</div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-4 fw-bold">Sexe:</div>
                            <div class="col-8">{{ ucfirst($sexe) }}</div>
                        </div>
                        
                        <div class="row">
                            <div class="col-4 fw-bold">Loisirs:</div>
                            <div class="col-8">
                                @if(!empty($loisirs))
                                    @foreach($loisirs as $loisir)
                                        <span class="badge bg-primary me-1">{{ ucfirst($loisir) }}</span>
                                    @endforeach
                                @else
                                    <span class="text-muted">Aucun loisir sélectionné</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <a href="{{ route('form.create') }}" class="btn btn-primary">
                            <i class="bi bi-arrow-left"></i> Retour au formulaire
                        </a>
                        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-house"></i> Retour à l'accueil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
