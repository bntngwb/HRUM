<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageUploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/upload', function () {
    return view('product');
});

Route::get('/item', function () {
    return view('item');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Remove the closure for '/upload' and keep the controller-based route
Route::get('/upload', [ImageUploadController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload', [ImageUploadController::class, 'uploadImage'])->name('upload.image');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
