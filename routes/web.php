<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\MemberCheck;
use App\Http\Middleware\AdminCheck;

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

Route::get('/', [TransaksiController::class, 'dashboard']) -> middleware(AuthCheck::class);

Route::get('/login', function() { return view('login'); });

Route::post('/login/auth', [PenggunaController::class, 'authenticate']) -> name('loginAuth');

Route::get('/logout', [PenggunaController::class, 'logout']) -> middleware(AuthCheck::class) ;

Route::get('/input-barang', [BarangController::class, 'barangPage']) -> middleware(MemberCheck::class);

Route::get('/input-barang/remove/{id}', [BarangController::class, 'deleteBarang']) -> middleware(MemberCheck::class);

Route::get('/transaksi', [TransaksiController::class, 'transaksiPage']) -> middleware(AuthCheck::class);

Route::get('/input-transaksi', [TransaksiController::class, 'inputTransaksiPage'])->middleware(MemberCheck::class);

Route::post('/input-transaksi/post', [TransaksiController::class, 'insertTransaksi']) -> middleware(MemberCheck::class) -> name('insertTransaksi');

Route::get('/input-transaksi/rollback/{id}', [TransaksiController::class, 'rollbackTransaksi']) -> middleware(MemberCheck::class);

Route::get('/stok', [TransaksiController::class, 'stokPage']) -> middleware(AuthCheck::class);

Route::get('/register', function() { return view('register'); }) -> middleware(AdminCheck::class);

Route::post('/register/auth', [PenggunaController::class, 'register'])-> middleware(AdminCheck::class)-> name('register');