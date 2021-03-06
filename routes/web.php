<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/barang/barang_pdf', [BarangController::class, 'barang_pdf'])->name('barang.barang_pdf');
Route::get('/barang/qrbarang_pdf', [BarangController::class, 'qrbarang_pdf'])->name('barang.qrbarang_pdf');
Route::get('/{any}', function () {
    return view('app');
})->where('any','.*');

