<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NageurController;
use App\Http\Controllers\EnfantNageurController;
use App\Http\Controllers\MessageController;


Route::get('/', function () {
    return view('Accueil');
});

Route::get('/equipe', function () {
    return view('eq');
});

Route::get('/Accueil', function () {
    return view('Accueil');
});

Route::get('/Activite', function () {
    return view('Activite');
});

Route::get('/Formulaire', function () {
    return view('Formulaire');
});

Route::get('/FormEnfant', function () {
    return view('FormEnfant');
});

Route::get('/Contacts', function () {
    return view('Contacts');
});

Route::get('/Activites', function () {
    return view('Activites');
});

Route::post('/ajouter', [NageurController::class, 'NewNageur']);
Route::post('/ajout', [EnfantNageurController::class, 'NewEnfantNageur']);
Route::post('/newmessage', [MessageController::class, 'NewMessage']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
