<?php

use App\Http\Controllers\Api\AttrazioneController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\RestaurantController;
use Illuminate\Support\Facades\Route;

// Attrazioni
Route::get("attrazioni", [AttrazioneController::class, "index"]);
Route::get("attrazioni/{attrazione}", [AttrazioneController::class, "show"]);

//eventi
Route::get("events", [EventController::class, "index"]);
Route::get("events/{event}", [EventController::class,"show"]);

//ristoranti
Route::get("restaurants", [RestaurantController::class, "index"]);
Route::get("restaurants/{restaurant}", [RestaurantController::class,"show"]);
