<?php

use App\Http\Controllers\Api\AttrazioneController;
use Illuminate\Support\Facades\Route;

Route::get("attrazioni", [AttrazioneController::class, "index"]);

Route::get("attrazioni/{attrazione}", [AttrazioneController::class, "show"]);
