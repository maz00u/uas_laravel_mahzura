<?php

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
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index']);
Route::get('/barang/create', [App\Http\Controllers\BarangController::class, 'create']);
Route::post('/barang', [App\Http\Controllers\BarangController::class, 'store']);
Route::get('/barang/edit/{id}', [App\Http\Controllers\BarangController::class, 'edit']);
Route::patch('/barang/{id}', [App\Http\Controllers\BarangController::class, 'update']);
Route::delete('/barang/{id}', [App\Http\Controllers\BarangController::class, 'destroy']);

Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index']);
Route::get('/supplier/create', [App\Http\Controllers\SupplierController::class, 'create']);
Route::post('/supplier', [App\Http\Controllers\SupplierController::class, 'store']);
Route::get('/supplier/edit/{id}', [App\Http\Controllers\SupplierController::class, 'edit']);
Route::patch('/supplier/{id}', [App\Http\Controllers\SupplierController::class, 'update']);
Route::delete('/supplier/{id}', [App\Http\Controllers\SupplierController::class, 'destroy']);

Route::get('/konsumen', [App\Http\Controllers\KonsumenController::class, 'index']);
Route::get('/konsumen/create', [App\Http\Controllers\KonsumenController::class, 'create']);
Route::post('/konsumen', [App\Http\Controllers\KonsumenController::class, 'store']);
Route::get('/konsumen/edit/{id}', [App\Http\Controllers\KonsumenController::class, 'edit']);
Route::patch('/konsumen/{id}', [App\Http\Controllers\KonsumenController::class, 'update']);
Route::delete('/konsumen/{id}', [App\Http\Controllers\KonsumenController::class, 'destroy']);