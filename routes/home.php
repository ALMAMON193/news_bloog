<?php

use App\Http\Controllers\FrontEnd\Techonology\TechonologyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\TrandingNews\TrandingController;

Route::get('/trending-posts', [TrandingController::class, 'index']);
Route::get('/techolonogy-posts', [TechonologyController::class, 'Techolonogy']);
Route::get('/health-posts', [TrandingController::class, 'health']);
Route::get('/sports-posts', [TrandingController::class, 'sports']);
Route::get('/entertainment-posts', [TrandingController::class, 'entertainment']);
Route::get('/business-posts', [TrandingController::class, 'business']);
Route::get('/science-posts', [TrandingController::class, 'science']);

?>