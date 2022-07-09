<?php

use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route ::middleware('auth')->group(function() {
        Route ::get('suppliers',[SupplierController ::class,"index"])
             ->name("suppliers.index");
        Route::get('suppliers/create',[SupplierController::class,"create"])
             ->name("suppliers.create");
        Route::post('suppliers',[SupplierController::class,"store"])
             ->name("suppliers.store");
});


