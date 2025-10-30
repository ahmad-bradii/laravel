@extends('layouts.app')

@section('title', 'Formulaire d\'information')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">
                        <i class="bi bi-file-text"></i> Formulaire d'information
                    </h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('form.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>

                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Âge</label>
                            <input type="number" class="form-control" id="age" name="age" min="0" max="120" required>
                        </div>

                        <div class="mb-3">
                            <label for="sexe" class="form-label">Sexe</label>
                            <select name="sexe" id="sexe" class="form-select" required>
                                <option value="" selected disabled>Choisissez...</option>
                                <option value="masculin">Masculin</option>
                                <option value="feminin">Féminin</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Loisirs</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="loisirs[]" value="sport" id="sport">
                                <label class="form-check-label" for="sport">Sport</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="loisirs[]" value="lecture" id="lecture">
                                <label class="form-check-label" for="lecture">Lecture</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="loisirs[]" value="cinema" id="cinema">
                                <label class="form-check-label" for="cinema">Cinéma</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="loisirs[]" value="musique" id="musique">
                                <label class="form-check-label" for="musique">Musique</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="loisirs[]" value="voyage" id="voyage">
                                <label class="form-check-label" for="voyage">Voyage</label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-send"></i> Envoyer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
