<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/accueil', [homeController::class, 'index'])->name('home');


Route::get('/contact', [contactController::class, 'index'])->name('contact.index');