<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;


Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/create', [CategoriesController::class, 'store']);
Route::get('/categories/{id}', [CategoriesController::class, 'show']);
