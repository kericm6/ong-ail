<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/accueil');

Route::get('/accueil', [homeController::class, 'index'])->name('home');
Route::get('/a-propos', [homeController::class, 'about'])->name('about');


Route::get('/contact', [contactController::class, 'index'])->name('contact.index');
