<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormController extends Controller
{
    /**
     * Afficher le formulaire
     */
    public function create()
    {
        return view('info');
    }

    /**
     * Récupérer les valeurs saisies et les afficher dans la vue
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:120',
            'sexe' => 'required|in:masculin,feminin',
            'loisirs' => 'nullable|array',
        ]);

        // Récupération des valeurs
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $age = $request->input('age');
        $sexe = $request->input('sexe');
        $loisirs = $request->input('loisirs', []);

        // Affichage dans la vue affiche-info.blade.php
        return view('affiche-info', compact('nom', 'prenom', 'age', 'sexe', 'loisirs'));
    }
}
