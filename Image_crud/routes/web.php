<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductsController::class,'index']);
Route::get('/show/{id}', [ProductsController::class, 'show']);

Route::get('/create', [ProductsController::class,'create'])->name('create');
Route::post('/store', [ProductsController::class, 'store']);

Route::get('/edit/{id}', [ProductsController::class, 'edit']);
Route::put('/update/{id}', [ProductsController::class, 'update']);

Route::get('/delete/{id}', [ProductsController::class, 'delete']);

// Route::delete('/delete/{id}', [ProductsController::class, 'delete']);