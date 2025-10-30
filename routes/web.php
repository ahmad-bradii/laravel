<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestFormController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Routes pour le formulaire
Route::get('/form', [TestFormController::class, 'create'])->name('form.create');
Route::post('/form', [TestFormController::class, 'store'])->name('form.store');


