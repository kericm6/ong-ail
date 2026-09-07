<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/accueil');
Route::get('/accueil', [homeController::class, 'index'])->name('home');
Route::get('/a-propos', [homeController::class, 'about'])->name('about');
Route::get('/notre-histoire', [homeController::class, 'history'])->name('histoire');
Route::get('/notre-equipe', [homeController::class, 'equipe'])->name('equipe');
Route::get('/nos-objectifs', [homeController::class, 'objectifs'])->name('objectifs');
Route::get('/domaines', [homeController::class, 'domaines'])->name('domaines');
Route::get('/projets', [homeController::class, 'projets'])->name('projets');
Route::get('/actualites', [homeController::class, 'blog'])->name('blog');
Route::get('/contact', [contactController::class, 'index'])->name('contact.index');
