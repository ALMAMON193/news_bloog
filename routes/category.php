<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Category\CategoryController;




Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['verified'])->name('dashboard');
  Route::get('category/view',[CategoryController::class,'view'])->name('view.category');
  Route::post('category/add',[CategoryController::class,'Add'])->name('add.category');
  Route::post('category/update/{id}',[CategoryController::class,'update'])->name('update.category');
  Route::delete('category/delete/{id}', [CategoryController::class, 'destroy'])->name('delete.category');

});

