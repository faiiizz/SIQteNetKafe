<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layout.master');
});


Route::get('/home', [App\Http\Controllers\HomeController::class,'index']);

Route::get('/makanan', [App\Http\Controllers\MakananController::class,'index']);
Route::get('/insert-makanan/{id?}', [App\Http\Controllers\MakananController::class,'insert']);
Route::get('/updateMakanan/{id?}', [App\Http\Controllers\MakananController::class,'updateMakanan']);
Route::get('/deleteMakanan/{id?}', [App\Http\Controllers\MakananController::class,'deleteMakanan']);


Route::get('/minuman', [App\Http\Controllers\MinumanController::class,'index']);
Route::get('/insert-minuman/{id?}', [App\Http\Controllers\MinumanController::class,'insert']);
Route::get('/updateMinuman/{id?}', [App\Http\Controllers\MinumanController::class,'updateMinuman']);
Route::get('/deleteMinuman/{id?}', [App\Http\Controllers\MinumanController::class,'deleteMinuman']);



Route::get('/list_pesanan', [App\Http\Controllers\list_pesananController::class,'index']);
Route::get('/insert-list_pesanan/{id?}', [App\Http\Controllers\list_pesananController::class,'insert']);
Route::get('/updatePesanan/{id?}', [App\Http\Controllers\list_pesananController::class,'updatePesanan']);
Route::get('/deletePesanan/{id?}', [App\Http\Controllers\list_pesananController::class,'deletePesanan']);


Route::get('/list_pelanggan', [App\Http\Controllers\list_pelangganController::class,'index']);
Route::get('/insert-list_pelanggan/{id?}', [App\Http\Controllers\list_pelangganController::class,'insert']);
Route::get('/updatePelanggan/{id?}', [App\Http\Controllers\list_pelangganController::class,'updatePelanggan']);
Route::get('/deletePelanggan/{id?}', [App\Http\Controllers\list_pelangganController::class,'deletePelanggan']);



Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class,'index']);
Route::get('/insert-pembayaran/{id?}', [App\Http\Controllers\PembayaranController::class,'insert']);
Route::get('/updatePembayaran/{id?}', [App\Http\Controllers\PembayaranController::class,'updatePembayaran']);
Route::get('/deletePembayaran/{id?}', [App\Http\Controllers\PembayaranController::class,'deletePembayaran']);

