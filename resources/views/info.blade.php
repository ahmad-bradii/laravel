<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .radio-group,
        .checkbox-group {
            margin-top: 5px;
        }
        .radio-group label,
        .checkbox-group label {
            display: inline-block;
            font-weight: normal;
            margin-right: 15px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        #sexe{
               width: 100%;
               padding: 8px;
               border: 1px solid #ddd;
               border-radius: 4px;
               box-sizing: border-box;
        }
    </style>
</head>
<body>
    <h1>Formulaire d'information</h1>
    
    <form action="{{ route('form.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>

        <div class="form-group">
            <label for="age">Âge:</label>
            <input type="number" id="age" name="age" min="0" max="120" required>
        </div>

        <!-- <div class="form-group">
            <label>Sexe:</label>
            <div class="radio-group">
                <label>
                    <input type="radio" name="sexe" value="masculin" required> Masculin
                </label>
                <label>
                    <input type="radio" name="sexe" value="feminin" required> Féminin
                </label>
                
            </div>
        </div> -->

        <label for="sexe"> Sexe:
          <select name="sexe" id="sexe">
               <option value="masculin">Masculin</option>
               <option value="feminin">Féminin</option>
          </select>
        </label>

        <div class="form-group">
            <label>Loisirs:</label>
            <div class="checkbox-group">
                <label>
                    <input type="checkbox" name="loisirs[]" value="sport"> Sport
                </label>
                <label>
                    <input type="checkbox" name="loisirs[]" value="lecture"> Lecture
                </label>
                <label>
                    <input type="checkbox" name="loisirs[]" value="cinema"> Cinéma
                </label>
                <label>
                    <input type="checkbox" name="loisirs[]" value="musique"> Musique
                </label>
                <label>
                    <input type="checkbox" name="loisirs[]" value="voyage"> Voyage
                </label>
            </div>
        </div>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
