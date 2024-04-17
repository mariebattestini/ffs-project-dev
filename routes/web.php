<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ValidateFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';

Route::post('/submit-form', [FormController::class, 'store'])->name('submit.form');
Route::get('/partager-experience', function () {
    return view('form');
})->name('form');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ExperienceController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/experiences/{experience}', [ExperienceController::class, 'show'])->name('experiences.show');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences.index');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/experiences/{experience}/publish', [ExperienceController::class, 'publish'])->name('experiences.publish');
});
