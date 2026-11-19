<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Pages statiques
Route::get('/', [PageController::class, 'home'])->name('page.home');
Route::get('/about', [PageController::class, 'about'])->name('page.about');

// La carte : route fixe avant la route à paramètre
Route::get('/dishes', [DishController::class, 'index'])->name('dish.index');
Route::get('/dishes/{id}', [DishController::class, 'show'])
    ->whereNumber('id')
    ->name('dish.show');

// Contact : même adresse, GET pour afficher, POST pour traiter
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
