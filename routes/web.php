<?php

use App\Http\Controllers\Admin\AttrazioneController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RestaurantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('attrazioni', AttrazioneController::class)->parameters([
    'attrazioni' => 'attrazione'
])->middleware(['auth','verified']);
;

Route::resource('events', EventController::class)->middleware(['auth','verified']);
;

Route::resource('restaurants', RestaurantController::class)->middleware(['auth','verified']);
;

require __DIR__.'/auth.php';
