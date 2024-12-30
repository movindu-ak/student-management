<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Student1Controller;


Route::get('/', function () {
    return view('layout');
});

Route::resource('/students', StudentController::class);

Route::resource('/students1', Student1Controller::class);



// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/students1', [Student1Controller::class, 'index'])->name('students1');
// });


// <?php


// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
