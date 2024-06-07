<?php

use App\Http\Controllers\Backend\Bloog_post\PostController;
use Illuminate\Support\Facades\Route;





Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['verified'])->name('dashboard');
  Route::get('/bloog-post/view',[PostController::class,'view'])->name('view.bloog');
  Route::post('/bloog-post/create',[PostController::class,'create'])->name('create.bloog');
  Route::post('/bloog-post/update/{id}',[PostController::class,'update'])->name('update.bloog');
  Route::delete('/bloog/delete/{id}', [PostController::class, 'delete'])->name('delete.bloog');


  

});

