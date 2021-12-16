<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route API User
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

//Route API Barang
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/NoUser', [BarangController::class, 'indexUser']);
Route::get('/barang/{id}', [BarangController::class, 'show']);
Route::post('/barang', [BarangController::class, 'store']);
Route::put('/barang/{id}', [BarangController::class, 'update']);
Route::delete('/barang/{id}', [BarangController::class, 'destroy']);

//Route API Kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/namakategori', [KategoriController::class, 'indexnama']);

//Route API Buku
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/{id}', [BukuController::class, 'show']);
Route::put('/buku/{id}', [BukuController::class, 'update']);
Route::post('/buku', [BukuController::class, 'store']);
Route::delete('/buku/{id}', [BukuController::class, 'destroy']);
