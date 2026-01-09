<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\BateauController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [CarrouselController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [BateauController::class, 'index'])->name('dashboard');
//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/voirBateau/{id}', [EquipementController::class, 'show'])->name('voirBateau');



Route::get('/ajouterBateau', function () {
    return view('ajouterBateau');
})->middleware(['auth', 'verified'])->name('ajouterBateau');

Route::resource('bateaus', BateauController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
