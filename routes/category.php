<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route ::middleware('auth')->group(function() {
        Route::get('categories',[CategoryController::class,"index"])
             ->name("categories.index");
        Route::get('categories/create',[CategoryController::class,"create"])
             ->name("categories.create");
        Route::post('categories',[CategoryController::class,"store"])
             ->name("categories.store");
});





