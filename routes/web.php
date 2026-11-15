<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/features', [PageController::class, 'features'])->name('features');
Route::get('/syntax', [PageController::class, 'syntax'])->name('syntax');
Route::get('/benefits', [PageController::class, 'benefits'])->name('benefits');
Route::get('/examples', [PageController::class, 'examples'])->name('examples');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
