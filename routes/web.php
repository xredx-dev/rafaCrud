<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () { return view('welcome');});

/**<!-- Rutas de mi CRUD  ---> */
Route::resource('products',ProductsController::class);
