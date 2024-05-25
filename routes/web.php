<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ValidateFormController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

// routes/web.php
Route::get('/', 'HomeController@index')->name('home');

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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/', function () {
    $publishedExperiences = App\Models\Experience::whereNotNull('published_at')->orderBy('published_at', 'desc')
        ->get();
    return view('home', compact('publishedExperiences'));
});

Route::middleware(['auth'])->group(function () {
    Route::get('/experiences/{experience}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');
});

Route::middleware(['auth'])->group(function () {
    Route::put('/experiences/{experience}', [ExperienceController::class, 'update'])->name('experiences.update');
});

Route::get('/experiences/{experience}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');
Route::put('/experiences/{experience}', [ExperienceController::class, 'update'])->name('experiences.update');
// Route::get('/experiences/{experience}', [ExperienceController::class, 'show'])->name('experience.show');


// Autres importations...

Route::get('/', function () {
    $publishedExperiences = App\Models\Experience::whereNotNull('published_at')->orderBy('published_at', 'desc')->get();
    return view('home', compact('publishedExperiences'));
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/experiences/{experience}', [ExperienceController::class, 'show'])->name('experience.show');
    Route::get('/experiences/{experience}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');
    Route::put('/experiences/{experience}', [ExperienceController::class, 'update'])->name('experiences.update');
    Route::post('/experiences/{experience}/publish', [ExperienceController::class, 'publish'])->name('experiences.publish');
    Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences.index');
});

Route::get('/unpublished-experiences/{experience}', [ExperienceController::class, 'showUnpublished'])->name('unpublished-experiences.show');
