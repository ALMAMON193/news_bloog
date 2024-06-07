<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\TrandingNews\TrandingController;

Route::get('/trending-posts', [TrandingController::class, 'index']);
?>