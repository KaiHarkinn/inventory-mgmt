<?php

use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route ::middleware('auth')->group(function() {
        Route ::get('suppliers',[SupplierController ::class,"index"])
             ->name("suppliers.index");

});
