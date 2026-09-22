<?php

use App\Http\Controllers\PageController;

Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');