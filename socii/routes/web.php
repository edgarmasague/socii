<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;

Route::get('/', HomeController::class)
    ->name('home');

Route::get('/galleries', [GalleryController::class, 'index'])
    ->name('galleries.index');

Route::get('/galleries/{gallery}', [GalleryController::class, 'show'])
    ->name('galleries.show');

Route::get('/photos/create', [PhotoController::class, 'create'])
    ->middleware('auth')
    ->name('photos.create');

Route::get('/photo/{photo}', [PhotoController::class, 'show'])
    ->name('photo.show');

Route::get('/profile/{user}', [ProfileController::class, 'show'])
    ->name('profile.show');
