<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Category\CategoryController;




Route::middleware('auth:admin')->prefix('admin/category')->group(function () {
    Route::get('/admin/dashboard', function () {
    return view('admin.index');
})->middleware(['verified'])->name('dashboard');
  Route::get('/view',[CategoryController::class,'view'])->name('view.category');
  Route::post('/add',[CategoryController::class,'Add'])->name('add.category');
 
  Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit');
  Route::post('/update/{id}',[CategoryController::class,'update'])->name('update');
});

