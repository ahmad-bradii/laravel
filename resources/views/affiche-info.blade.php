<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations reçues</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        .info-box {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .info-item {
            margin-bottom: 10px;
        }
        .info-label {
            font-weight: bold;
            display: inline-block;
            width: 120px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Informations reçues</h1>
    
    <div class="info-box">
        <div class="info-item">
            <span class="info-label">Nom:</span>
            <span>{{ $nom }}</span>
        </div>
        
        <div class="info-item">
            <span class="info-label">Prénom:</span>
            <span>{{ $prenom }}</span>
        </div>
        
        <div class="info-item">
            <span class="info-label">Âge:</span>
            <span>{{ $age }} ans</span>
        </div>
        
        <div class="info-item">
            <span class="info-label">Sexe:</span>
            <span>{{ $sexe }}</span>
        </div>
        
        <div class="info-item">
            <span class="info-label">Loisirs:</span>
            <span>
                @if(!empty($loisirs))
                    <!-- {{ implode(', ', array_map('ucfirst', $loisirs)) }} -->
                    @foreach($loisirs as $loisir)
                         <span style="color: blue; font-weight: bold;">{{$loisir}}, </span>
                    @endforeach
                @else
                    Aucun loisir sélectionné
                @endif
            </span>
        </div>
    </div>
    
    <a href="{{ route('form.create') }}">Retour au formulaire</a>
</body>
</html>
