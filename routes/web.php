<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/create', [ProductController::class,'create_product'])->name('create_product');
Route::post('/product/create', [ProductController::class,'store_product'])->name('store_product');
Route::get('/product', [ProductController::class,'index_product'])->name('index_product');
Route::get('/product/{product}', [ProductController::class,'show_product'])->name('show_product');
Route::get('/product/{product}/edit', [ProductController::class,'edit_product'])->name('edit_product');
Route::patch('/product/{product}/update', [ProductController::class,'update_product'])->name('update_product');
